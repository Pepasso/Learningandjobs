<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arParams
 * @var array $arResult
 */

$arCard = $arResult['CARD'];
$balance = $arCard['BALANCE'];
$closestExpirationSumm = $arCard['CLOSEST_EXPIRATION_SUMM'];
$closestExpirationDate = $arCard['CLOSEST_EXPIRATION_DATE'];
?>
<? if ($arResult['ERROR']): ?>
    <? ShowError($arResult['ERROR']); ?>
<? else: ?>
    <section class="account-page__card" data-tier="<?= $arCard['TIER_ID'] ?>">
        <div class="account-page__card__image">
            <div>
                <img src="<?= $arCard['IMAGE'] ?>"
                     alt="Карта лояльности гостиниц Ольга и Берлога">
                <span class="<?= $arCard['IS_VIP'] ? 'vip' : ''; ?>">
                    <?= $arCard['ID'] ?>
                </span>
            </div>
        </div>

        <div class="account-page__card__main">
            <div class="account-page__card__balance">
                <div class="account-page__card__balance__score">
                    <?= $balance ?? "?" ?> <?= wordPlural($balance, ['балл', 'балла', 'баллов']) ?>
                </div>
                <? if ($closestExpirationSumm > 0): ?>
                    <div class="account-page__card__balance__expired">
                        <?= $closestExpirationSumm ?>
                        <?= wordPlural($closestExpirationSumm, ['сгорит', 'сгорят', 'сгорят']) ?>
                        <?= $closestExpirationDate ?>
                    </div>
                <? endif; ?>
            </div>

            <div class="account-page__card__user">
                <div class="account-page__card__user__name">
                    <?= $arResult['USER']['FULL_NAME'] ?? "Имя не указано"; ?>
                </div>
                <div class="account-page__card__user__phone">
                    <?= prettyPhone($arResult['USER']['PERSONAL_PHONE']) ?>
                </div>
            </div>
        </div>

        <div class="account-page__card__tier">
            <div class="account-page__card__balance">
                <div class="account-page__card__balance__score">
                    <?= $arResult['CARD']['DISCOUNT']; ?>
                </div>
                <div class="account-page__card__balance__expired">
                    Размер процента <br>
                    начисляемых бонусов
                </div>
            </div>

            <div class="account-page__card__leveling">
                <? if (!$arCard['IS_VIP']): ?>
                    <div class="account-page__card__leveling__remains">
                        До следующего уровня карты:<br><?= $arCard['REMAINS_SUM'] ?>&nbsp;руб.
                    </div>

                    <div class="account-page__card__leveling__progress">
                        <div>
                            <div style="width: <?= $arCard['REMAINS_PERCENT'] ?>%;"></div>
                        </div>
                        <span class="account-page__card__leveling__progress__from">
                        <?= $arCard['SUM_FROM'] ?>
                    </span>
                        <span class="account-page__card__leveling__progress__to">
                        <?= $arCard['SUM_TO'] ?>
                    </span>
                    </div>
                <? endif; ?>

                <div class="account-page__card__leveling__description">
                    <?= $arCard['DESCRIPTION'] ?>
                </div>
            </div>
        </div>
    </section>

    <section class="account-page__history">
        <? foreach ($arResult['ITEMS'] as $arHistoryItem): ?>
            <div class="account-page__history__item">
                <div class="account-page__history__item__score">
                    <?= $arHistoryItem['summ'] ?> <?= wordPlural(
                        (int)$arHistoryItem['summ'],
                        ['балл', 'балла', 'баллов']
                    ) ?>
                </div>
                <div class="account-page__history__item__description">
                    <?= $arHistoryItem['date_created'] ?>
                    /&nbsp;<?= $arHistoryItem['name'] ?>
                    <?= $arHistoryItem['expiration_date']
                        ? "/&nbsp;Сгорят&nbsp;{$arHistoryItem['expiration_date']}" : ""; ?>
                </div>
            </div>
        <? endforeach; ?>
    </section>
<? endif; ?>

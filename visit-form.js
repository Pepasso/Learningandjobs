import React, {useState} from 'react';
import PropTypes from 'prop-types';
import {emit} from "../../../helpers";
import WithChild from '../../hoc/with-child/with-child';
import Checkbox from '../Inputs/Checkbox/Checkbox';
import LoadingIndicator from "../../helpers/loading-indicator/loading-indicator";
import FormWrapper from "../../hoc/form-wrapper/form-wrapper";
import {connect} from "react-redux";
import {setConfirm} from "../../store/actions/confirm";
import {discardServiceRooms, setServiceRooms} from "../../store/actions/service-rooms";
import WithShow from '../../hoc/with-show';
import {Controller, useForm} from "react-hook-form";
import DateInput from "../Inputs/date-input/date-input";
import NumberInput from "../Inputs/number-input/number-input";
import classNames from 'classnames';
import LogusService from "../../services/logus-service";
import _ from 'lodash/lang';
import WithStep from "../../hoc/with-step";

const mapStateToProps = ({confirm, serviceRooms, rooms, visitDates}, ownProps) => {
    return {
        ...ownProps,
        serviceRooms,
        confirm,
        visitDates,
        rooms
    }
};

const mapDispatchToProps = dispatch => {
    return {
        setServiceRooms: (rooms) => dispatch(setServiceRooms(rooms)),
        setConfirm: isConfirm => dispatch(setConfirm(isConfirm)),
        discardServiceRooms: () => dispatch(discardServiceRooms()),
    }
};

const VisitForm = props => {
    const {step, confirm, setConfirm, classList, rooms, setServiceRooms, discardServiceRooms} = props;
    const [loading, setLoading] = useState(false);
    const {register, handleSubmit, control, errors, watch} = useForm();
    const dateWatcher = watch('date');
    const logusService = new LogusService();

    const toggleConfirmHandler = () => {
        setConfirm(!confirm);
    };

    const getRooms = (requestParams) => {
        console.log('requestParams', requestParams);
        discardServiceRooms();
        setLoading(true);
        logusService.getRooms(requestParams)
            .then((response) => {
                setLoading(false);
                if (_.isArray(response)) {
                    const rooms = response.map((item) => ({...item, ...requestParams}));
                    setServiceRooms(rooms);
                } else {
                    console.log(response);
                }
            });
    };

    const submitHandler = (e) => {
        if (!confirm) return;
        getRooms(e);
    };

    const cn = classNames(
        'visit-form',
        {classList: classList}
    );

    const isEqualDate = () => (dateWatcher?.length >= 2) && (dateWatcher[0].toString() === dateWatcher[1].toString());

    const submitCn = classNames(
        {'disabled': ((dateWatcher?.length < 2) || isEqualDate() || !confirm)}
    );

    const showModalHandler = (e) => {
        e.preventDefault();
        emit('booking-modal-form:open');
    };

    return (
        <WithChild>
            <WithShow show={loading}>
                <LoadingIndicator/>
            </WithShow>
            <form className={cn} onSubmit={handleSubmit(submitHandler)}>
                <div className="visit-form__content">
                    <FormWrapper
                        bigCol={
                            <div className="mb-70 mb-sm-30">
                                <Controller
                                    as={DateInput}
                                    control={control}
                                    onChangeName={'onInputChange'}
                                    id="number-1"
                                    label="Даты визита"
                                    name="date"
                                    mode="range"
                                    required
                                />
                            </div>
                        }
                        left={
                            <div className="col-10 col-md mb-70 mb-sm-30">
                                <Controller
                                    as={NumberInput}
                                    control={control}
                                    onChangeName={'onInputChange'}
                                    label="Взрослые"
                                    name="adults"
                                    min={1}
                                    defaultValue={2}
                                    max={10}
                                    required/>
                            </div>
                        }
                        center={
                            <div className="col-10 col-md mb-70 mb-sm-30">
                                <Controller
                                    as={NumberInput}
                                    control={control}
                                    onChangeName={'onInputChange'}
                                    label="дети 6-12 лет"
                                    name="teen"
                                    min={0}
                                    defaultValue={0}
                                    max={10}/>
                            </div>
                        }
                        right={
                            <div className="col-10 col-md mb-70 mb-sm-30">
                                <Controller
                                    as={NumberInput}
                                    control={control}
                                    onChangeName={'onInputChange'}
                                    label="дети 0-5 лет"
                                    name="child"
                                    min={0}
                                    defaultValue={0}
                                    max={10}/>
                            </div>
                        }
                    />
                </div>
                <WithStep currentStep={step} step={1} equal={true}>
                    <div className="visit-form__footer">
                        <FormWrapper
                            bigCol={
                                <div className="booking-form__description">
                                    Введите даты визита для {rooms.length + 1}-го номера.
                                    <br/>
                                    {rooms.length > 0 ? null : 'Далее вы сможете добавить еще номера.'}
                                </div>
                            }

                            left={
                                <div className="visit-form__col">
                                    <Checkbox
                                        checked={confirm}
                                        onToggleChecked={toggleConfirmHandler}>
                                        Я СОГЛАСЕН С{' '}
                                        <a href="https://olgahotel.ru/media/%D0%9F%D1%80%D0%B0%D0%B2%D0%B8%D0%BB%D0%B0%20%D0%B1%D1%80%D0%BE%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F.pdf"
                                           target="_blank">ПРАВИЛАМИ БРОНИРОВАНИЯ</a>
                                        , <a
                                        href="https://olgahotel.ru/media/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0_%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B_%D0%B8_%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8_%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85.pdf"
                                        target="_blank">политикой конфиденциальности</a>
                                    </Checkbox>
                                </div>
                            }

                            center={
                                <div className="visit-form__col">
                                    <button
                                        className="btn btn_small"
                                        disabled={submitCn}>
                                        Подобрать
                                    </button>
                                </div>
                            }
                        >
                        </FormWrapper>
                        {/*<div className={`row form-wrapper visit-form__footer visit-form__footer_last visit-form_mt-4`}>*/}
                            {/*<div className="col-20 col-sm-9 col-md-8 col-lg-7 offset-md-1 visit-form_mb-4">*/}
                                {/*<a className="btn btn_white" href="https://olgahotel.ru/media/cashback.pdf" target="_blank">Правила*/}
                                    {/*программы cashback</a>*/}
                            {/*</div>*/}
                            {/*<div className="col-20 col-sm-9 offset-sm-2 col-md-8 col-lg-6 offset-md-2 offset-lg-5">*/}
                                {/*<div className="visit-form__col visit-form__col_2 visit-form__col_last">*/}
                                    {/*<a className="btn" href="#" onClick={showModalHandler}>Забронировать по программе*/}
                                        {/*Cashback</a>*/}
                                {/*</div>*/}
                            {/*</div>*/}
                        {/*</div> */}
                    </div>
                </WithStep>
            </form>
            {props.children}
        </WithChild>
    );
};

VisitForm.propTypes = {
    step: PropTypes.number,
    onBtnClick: PropTypes.func,
};

export default connect(mapStateToProps, mapDispatchToProps)(VisitForm);

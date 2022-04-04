const path = require("path");
const webpack = require("webpack");
const InlineSourcePlugin = require("html-webpack-inline-source-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const HtmlWebpackHarddiskPlugin = require("html-webpack-harddisk-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
var HardSourceWebpackPlugin = require('hard-source-webpack-plugin');
const Dotenv = require('dotenv-webpack');
const isProduction = process.env.NODE_ENV === "production";

const resolve = resolvePath => path.resolve(__dirname, "src", resolvePath);

const getChunksForPage = page => [
    "common",
    "vendors",
    page,
];

const productionImageOptimizer = isProduction ? {
    test: /\.(jpe?g|png|gif|svg)$/,
    loader: "image-webpack-loader",
    enforce: "pre",
} : {};

module.exports = {
    mode: isProduction ? "production" : "development",
    entry: {
        cashback: resolve("resources/files/cashback.pdf"),
        robots: resolve("robots.txt"),
        common: [
            'babel-polyfill',
            resolve("common/common.css"),
            resolve("pages/main/main.js"),
            resolve("pages/main/main.css"),
            resolve("pages/accom/accom.js"),
            resolve("pages/accom/accom.css"),
            resolve("pages/booking-finish/booking-finish.js"),
            resolve("pages/booking-finish/booking-finish.scss"),
            resolve("pages/payment/payment.scss"),
            resolve("pages/payment/payment.js"),
            resolve("pages/lux/lux.js"),
            resolve("pages/lux/lux.css"),
            resolve("pages/family/family.js"),
            resolve("pages/family/family.css"),
            resolve("pages/dubl/dubl.js"),
            resolve("pages/dubl/dubl.css"),
            resolve("pages/twin/twin.js"),
            resolve("pages/twin/twin.css"),
            resolve("pages/contacts/contacts.js"),
            resolve("pages/contacts/contacts.scss"),
            resolve("pages/about/about.js"),
            resolve("pages/about/about.css"),
            resolve("pages/restaurant/restaurant.js"),
            resolve("pages/restaurant/restaurant.css"),
            resolve("pages/fun/fun.js"),
            resolve("pages/fun/fun.css"),
            resolve("pages/spa/spa.js"),
            resolve("pages/spa/spa.css"),
            resolve("pages/business/business.js"),
            resolve("pages/business/business.css"),
            resolve("pages/aeroflot/aeroflot.js"),
            resolve("pages/aeroflot/aeroflot.css"),
            resolve("pages/stock/stock.js"),
            resolve("pages/stock/stock.css"),
            resolve("pages/newspaper/newspaper.js"),
            resolve("pages/newspaper/newspaper.css"),
            resolve("pages/events/events.js"),
            resolve("pages/events/events.css"),
            resolve("pages/loyalty/loyalty.js"),
            resolve("pages/loyalty/loyalty.css"),
            resolve("pages/reviews/reviews.js"),
            resolve("pages/reviews/reviews.css"),
            resolve("pages/gallery/gallery.js"),
            resolve("pages/gallery/gallery.css"),
            resolve('pages/booking/booking.scss'),
            resolve('pages/booking/booking.js'),
            resolve("pages/rent/rent.js"),
            resolve("pages/rent/rent.css"),
            resolve('core/react-booking/containers/App/app.scss'),
            resolve("common/common.js"),
            resolve("resources/files/cashback.pdf"),
        ],
    },
    output: {
        path: path.resolve(__dirname, "public", "build"),
        filename: isProduction ? "[name].[chunkhash].js" : "[name].js",
        chunkFilename: "[name].js",
        publicPath: "/build/",
    },
    resolve: {
        alias: {
            TweenMax: path.resolve(
                "node_modules",
                "gsap/src/uncompressed/TweenMax.js",
            ),
            TweenLite: path.resolve(
                "node_modules",
                "gsap/src/uncompressed/TweenLite.js",
            ),
            TimelineMax: path.resolve(
                'node_modules',
                'gsap/src/uncompressed/TimelineMax.js',
            ),
            ScrollToPlugin: path.resolve(
                "node_modules",
                "gsap/src/uncompressed/plugins/ScrollToPlugin.js",
            ),
            ScrollMagic: path.resolve(
                'node_modules',
                'scrollmagic/scrollmagic/uncompressed/ScrollMagic.js',
            ),
            'debug.addIndicators': path.resolve(
                "node_modules",
                "scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js",
            ),
            "animation.gsap": path.resolve(
                'node_modules',
                'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap.js',
            ),
            "react-hook-form": "react-hook-form/dist/react-hook-form.ie11"

        },
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: "babel-loader",
            },
            {
                test: /\.css$/,
                use: (isProduction ? [MiniCssExtractPlugin.loader] : ["style-loader"]).concat([
                    {
                        loader: "css-loader", options: {
                            importLoaders: 1,
                        }
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            ident: "postcss",
                            plugins: loader => [
                                require("postcss-import")(),
                                require("postcss-cssnext")(),
                                require("postcss-mixins")(),
                                require("postcss-nested")(),
                            ],
                        },
                    },
                ]),
            },
            {
                test: /\.scss$/,
                use: (isProduction ? [MiniCssExtractPlugin.loader] : ["style-loader"]).concat([
                    {
                        loader: "css-loader", options: {
                            importLoaders: 1,
                        }
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: false,
                            ident: "postcss",
                            plugins: loader => [
                                require("postcss-import")(),
                                require("postcss-cssnext")(),
                                require("postcss-mixins")(),
                                require("postcss-nested")(),
                            ],
                        },
                    },
                    {
                        loader: 'sass-loader',
                        options: {sourceMap: false},
                    },
                ])
            },
            {
                test: /\.(jpe?g|png|gif)$/,
                loader: "url-loader",
                options: {
                    name: isProduction ? "[name].[hash:8].[ext]" : "[name].[ext]",
                    limit: 10 * 1024,
                },
            },
            {
                test: /\.svg$/,
                loader: "svg-url-loader",
                options: {
                    limit: 10 * 1024,
                    noquotes: true,
                },
            },
            productionImageOptimizer,
            {
                exclude: /\.(html|js|scss|p?css|json|jpe?g|png|gif|svg)$/,
                loader: "file-loader",
            },
            {
                test: /robots\.txt$/,
                loader: "file-loader",
                options: {
                    name: '../[name].txt',
                },
            },
            {
                test: /\.pdf$/,
                loader: "file-loader",
                options: {
                    name: '../files/[name].pdf',
                },
            },
        ],
    },
    // optimization: {
    //   splitChunks: {
    //     chunks: "all"
    //   },
    //   runtimeChunk: true
    // },
    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/main/main.html"),
            filename: path.resolve(__dirname, "public/index.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("main"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/accom/accom.html"),
            filename: path.resolve(__dirname, "public/accom.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("accom"),
            chunksSortMode: "manual",
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/lux/lux.html"),
            filename: path.resolve(__dirname, "public/lux.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("lux"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/family/family.html"),
            filename: path.resolve(__dirname, "public/family.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("family"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/dubl/dubl.html"),
            filename: path.resolve(__dirname, "public/dubl.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("dubl"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/twin/twin.html"),
            filename: path.resolve(__dirname, "public/twin.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("twin"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/contacts/contacts.html"),
            filename: path.resolve(__dirname, "public/contacts.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("contacts"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/about/about.html"),
            filename: path.resolve(__dirname, "public/about.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("about"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/restaurant/restaurant.html"),
            filename: path.resolve(__dirname, "public/restaurant.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("restaurant"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/fun/fun.html"),
            filename: path.resolve(__dirname, "public/fun.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("fun"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/spa/spa.html"),
            filename: path.resolve(__dirname, "public/spa.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("spa"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/business/business.html"),
            filename: path.resolve(__dirname, "public/business.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("business"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/aeroflot/aeroflot.html"),
            filename: path.resolve(__dirname, "public/about/aeroflot.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("aeroflot"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/stock/stock.html"),
            filename: path.resolve(__dirname, "public/about/stock.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("stock"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/newspaper/newspaper.html"),
            filename: path.resolve(__dirname, "public/about/newspaper.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("newspaper"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/events/events.html"),
            filename: path.resolve(__dirname, "public/about/events.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("events"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/loyalty/loyalty.html"),
            filename: path.resolve(__dirname, "public/about/loyalty.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("loyalty"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/reviews/reviews.html"),
            filename: path.resolve(__dirname, "public/about/reviews.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("reviews"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/gallery/gallery.html"),
            filename: path.resolve(__dirname, "public/about/gallery.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("gallery"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/booking/booking.html"),
            filename: path.resolve(__dirname, "public/booking.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("booking"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/payment/payment.html"),
            filename: path.resolve(__dirname, "public/payment.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("payment"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/booking-finish/booking-finish.html"),
            filename: path.resolve(__dirname, "public/booking-finish.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("payment"),
        }),
        new HtmlWebpackPlugin({
            template: resolve("pages/rent/rent.html"),
            filename: path.resolve(__dirname, "public/rent.html"),
            alwaysWriteToDisk: true,
            inlineSource: "runtime~.+\\.js",
            chunks: getChunksForPage("rent"),
        }),
        new Dotenv(),
    ].concat(
        isProduction
            ? [new InlineSourcePlugin(), new webpack.HashedModuleIdsPlugin(), new MiniCssExtractPlugin(), new CleanWebpackPlugin(), new HardSourceWebpackPlugin()]
            : [new HtmlWebpackHarddiskPlugin()],
    ),
    devServer: {
        contentBase: path.join(__dirname, "public"),
        host: '0.0.0.0',
        // hot: true,
        // inline: false,
    },
};

module.exports = {
    // ...other configuration options
    chainWebpack: (config) => {
      config.module
        .rule("css")
        .oneOf("vue")
        .use("vue-style-loader")
        .tap((options) => {
          options.shadowMode = true;
          return options;
        })
        .end()
        .use("css-loader")
        .tap((options) => {
          options.modules = {
            localIdentName: "[name]-[hash]",
          };
          return options;
        })
        .end();
    },
  };

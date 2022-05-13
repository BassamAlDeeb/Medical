var app = angular.module("app", ['pascalprecht.translate']);

app.config(["$translateProvider", function ($translateProvider) {

    $translateProvider.useStaticFilesLoader({
        prefix: '/Scripts/Resources/lang_',
        suffix: '.json'
    });

    $translateProvider.preferredLanguage(CurrentLanguage);

}]);
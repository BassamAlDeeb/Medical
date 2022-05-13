/// <reference path="app.js" />

app.controller("logInController", ["$scope", "$translate", "$http", function ($scope, $translate, $http) {
    $scope.SetLanguage = function (cul) {

        $scope.culture = cul;
        var urlpath = window.location.href;
        $scope.CurrentUrl = urlpath;
        $scope.Type = qs("Type");
        $scope.action = "Index";

    };


    function qs(key) {
        key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
        var match = location.search.match(new RegExp("[?&]" + key + "=([^&]+)(&|$)"));
        return match && decodeURIComponent(match[1].replace(/\+/g, " "));
    }

    $scope.IDorEmail = "";
    $scope.confirmActivationCode = "";
    $scope.ForgetUserName = function () {
        if (!$scope.IDorEmail) {
            $scope.alertType = "danger";
            $scope.alertMsg = "User Name Is Required";
            return;
        }
        else {
            $http({
                method: 'post',
                url: '/Login/ForgetUserName',
                headers: { 'Content-Type': "application/json" },
                data: { UserName: $scope.IDorEmail }
            }).then(function (res) {
                if (res.data) {
                    $scope.alertType = res.data.alertType;
                    $scope.alertMsg = res.data.Message;
                }

                if (res.data.redirectUrl) {
                    //$scope.alertType = "sucess";
                    //$('#ForgetUserName').modal('show');
                    //aspx page
                    window.location.href = res.data.redirectUrl;

                }

            }, function (err) {
                //console.log(err);
                $scope.alertType = 'danger';
                $scope.alertMsg = err.xhrStatus;
            });

        }
    }

    //SendActivationCode

    $scope.SendActivationCode = function (ActivationType) {
        if (!$scope.confirmActivationCode) {
            $scope.alertType = "danger";
            $scope.alertMsg = "Please Enter Activation Code";
            return;
        }
        else {
            $http({
                method: 'post',
                url: '/Login/SendActivationCode',
                headers: { 'Content-Type': "application/json" },
                data: { ActivationCode: $scope.confirmActivationCode, PatientNum: $scope.IDorEmail, ConfirmActivationType: ActivationType }
            }).then(function (res) {
                if (res.data) {
                    $scope.alertType = res.data.alertType;
                    $scope.alertMsg = res.data.Message;
                }
                if (res.data.redirectUrl) {
                    //if (res.data.redirectUrl == "CreateName") {
                    //    console.log("CreateName");
                    //    $('#ForgetUserName').modal('hide');
                    //    $('#createUserName').modal('show');
                    //}
                    //else if (res.data.redirectUrl == "CreatePassword")
                    //{
                    //    console.log("CreatePassword");
                    //    $('#ForgetPassword').modal('hide');
                    //    $('#createPassword').modal('show');
                    //}
                    window.location.href = res.data.redirectUrl;
                }

            }, function (err) {
                //console.log(err);
                $scope.alertType = 'danger';
                $scope.alertMsg = err.xhrStatus;
            });

        }
    }

   



    $scope.forgetPassUserName = "";
    $scope.ForgetPassword = function () {
        if (!$scope.forgetPassUserName) {
            $scope.alertType = "danger";
            $scope.alertMsg = "Field Is Required";
            return;
        }
        else {
            $http({
                method: 'post',
                url: '/Login/ForgetPassword',
                headers: { 'Content-Type': "application/json" },
                data: { Password: $scope.forgetPassUserName }
            }).then(function (res) {
                if (res.data) {
                    $scope.alertType = res.data.alertType;
                    $scope.alertMsg = res.data.Message;
                }
                if (res.data.redirectUrl) {
                    window.location.href = res.data.redirectUrl;
                }
            }, function (error) {
                $scope.alertType = 'danger';
                $scope.alertMsg = error.xhrStatus;
            });
        }
    }
    $scope.PatientNo = "";
    $scope.CreateNewAccount = function () {
        if (!$scope.PatientNo) {
            $scope.alertType = "danger";
            $scope.alertMsg = "Field Is Required";
            return;
        }
        else {
            $http({
                method: 'post',
                url: '/Login/CreateNewAccount',
                headers: { 'Content-Type': "application/json" },
                data: { NewUserName: $scope.PatientNo }
            }).then(function (res) {
                if (res.data.redirectUrl) {
                    var current = location.href;
                    var navigateTo = current.replace("Index/?Type=Individual", res.data.redirectUrl)
                    // alert(navigateTo);
                  //  window.location.href = navigateTo; 
                    window.location.href = res.data.redirectUrl;
                }
                if (res.data) {
                    $scope.alertType = res.data.alertType;
                    $scope.alertMsg = res.data.Message;
                }
            }, function (error) {
                $scope.alertType = 'danger';
                $scope.alertMsg = error.xhrStatus;
            });

        }
    }

    //$scope.Countries = [];
    //if (Countries)
    //{
    //    $scope.Countries = Countries;
    //    console.log($scope.Countries);
    //}

    //$scope.selectedCountry = "";
    //$http.get('/login/GetAllCountries').then(function (response) {
    //    console.log(response.data.Countries);
    //    if (response.data.Countries != null || response.data.Countries != "undefined") {
    //        $scope.Countries = response.data.Countries;
    //        console.log($scope.data.Countries);
    //    }
    //});


}]);
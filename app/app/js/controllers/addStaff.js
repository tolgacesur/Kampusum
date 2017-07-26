app.controller('addStaff', ['$scope', '$http',
 function ($scope, $http) {
   $scope.staff = {};
$scope.submit = function () {

        $http({
          method  : 'POST',
          url     : 'http://127.0.0.1:8000/api/addstaff',
          data    : {
            name: $scope.staff.name, 
            department: $scope.staff.department,
            email: $scope.staff.email,
            sex: $scope.staff.sex,
            facebook: $scope.staff.facebook,
            twitter: $scope.staff.twitter,
            google: $scope.staff.google,
            url: $scope.staff.url,
            birthday: $scope.staff.birthday,
            brief: $scope.staff.brief,
            phone: $scope.staff.phone,
            position: $scope.staff.position,
            parola: $scope.staff.parola
            },
         })
          .success(function(response) {
               swal(
                    response.baslik, 
                    response.icerik, 
                    response.durum
                    )
          });
     };
  }]);


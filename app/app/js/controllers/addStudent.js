app.controller('addStudent', ['$scope', '$http',
 function ($scope, $http) {
   $scope.student = {};
$scope.submit = function () {

        $http({
          method  : 'POST',
          url     : 'http://127.0.0.1:8000/api/addstudent',
          data    : {
            name: $scope.student.name, 
            department: $scope.student.department,
            email: $scope.student.email,
            sex: $scope.student.sex,
            year: $scope.student.year,
            facebook: $scope.student.facebook,
            twitter: $scope.student.twitter,
            google: $scope.student.google,
            url: $scope.student.url,
            birthday: $scope.student.birthday,
            brief: $scope.student.brief,
            phone: $scope.student.phone,
            position: $scope.student.position,
            parola: $scope.student.parola
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


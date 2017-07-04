var angularAll =  angular.module('Personajes', []);

angularAll.controller('RegistrarCtrl', function($scope, $http){
    $scope.rsJSON = [];
    $scope.registrar = function(){
        RegistrarPersonaje($http, $scope);
    };
});

function RegistrarPersonaje($http, $scope){
    $scope.type = 'insertar';
    $http.post('controller/PersonajeCtrl.php', 
        {txtNomb1 : $scope.txtNomb1, txtDesc1 : $scope.txtDesc1, type : $scope.type}).then(successCallback, errorCallback);
    function successCallback(response){
        if(response.data.result == 'OK'){
             swal("Listo!", "Se ha registrado el personaje correctamente", "success");
             $scope.txtNomb1 = '';
             $scope.txtDesc1 = '';
        } else{
            sweetAlert("Oops...", "No se pudo registrar!", "error");
            console.log('Erroraso: ' + response.data);
            $scope.txtNomb1 = '';
        $scope.txtDesc1 = '';
        }
    }
    function errorCallback(error){
        //$scope.equipo = 'ERROR';
        console.log('Error: 2' + response.error);
        sweetAlert("Oops...", "Algo salio mal!", "error");
        $scope.txtNomb1 = '';
        $scope.txtDesc1 = '';
    }

}


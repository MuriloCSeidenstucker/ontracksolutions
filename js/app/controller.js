angular.module("myApp",[])
.controller("indexController", function($scope){
  $scope.titulo = "On Track Solutions";
  $scope.login = "https://ontracksolutions.com.br/acesso/";
  $scope.appAndroid = "https://play.google.com/store/apps/details?id=br.com.appselsyn.spro&pli=1";
  $scope.appIOS = "https://apps.apple.com/us/app/s-pro/id1458113409";
  $scope.localizacao = "";
  $scope.googleMaps = "";
  $scope.estado = "Araguari/MG";
  $scope.whatsapp = "https://api.whatsapp.com/send?phone=5534997068938&text=Oi,%20estou%20visitando%20o%20site%20e%20quero%20saber%20mais!%20"
  $scope.telefone = "(34) 99706-8938"
  $scope.contatoEmail = "mailto:contato@ontracksolutions.com.br";
  $scope.email = "contato@ontracksolutions.com.br";
  $scope.instagram = "https://www.instagram.com/ontrack_rastreadores/"
  // $scope.facebook = "https://www.facebook.com/profile.php?id=100063740760974"
});

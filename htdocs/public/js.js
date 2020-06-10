$(document).ready(function () {
  // FUNÇÃO P SELECIONAR DRIVERS

  $(".driver-name").click(function () {
    var driverName = $(this).text();
    var driverId = this.firstElementChild.dataset.id;

    if ($(".chosen-driver-left-text").is(":empty")) {
      $(".chosen-driver-left-text").text(driverName);

      document.getElementById("idLeft").value = driverId;
    } else {
      $(".chosen-driver-right-text").text(driverName);

      document.getElementById("idRight").value = driverId;
    }
  });
});
// // PASSAGEM DE PARAMTROS POR AJAX NO COMPARE BUTTON
// $(".compare-submit").click(function () {}
//   var chosenDriverLeftPreTrim = document.querySelector(
//     ".chosen-driver-left-text"
//   );
//   var chosenDriverRightPreTrim = document.querySelector(
//     ".chosen-driver-right-text"
//   );

//   console.log(chosenDriverLeftPreTrim.dataset.id);
//   console.log(chosenDriverRightPreTrim.dataset.id);

//   // Variaveis drivers com trim
//   var chosenDriverLeft = chosenDriverLeftPreTrim.textContent.trim();
//   var chosenDriverRight = chosenDriverRightPreTrim.textContent.trim();

//   // FALTA IMPLEMENTAR QUE APENAS AVANCE PARA O COMPARE CASO HAJA DOIS PILOTOS SELECIONADOS

//   if (chosenDriverLeft.length == 0 || chosenDriverRight.length == 0) {
//     alert("seleciona dois pilotos");
//   }

//   console.log($.trim(chosenDriverLeft));
//   console.log($.trim(chosenDriverRight));

//   // CRIAÇÃO JSON E ENVIO

//   var driversSend = {
//     driver1: chosenDriverLeft,
//     driver2: chosenDriverRight,
//     driver1Id: chosenDriverLeftPreTrim.dataset.id,
//     driver2Id: chosenDriverRightPreTrim.dataset.id,
//   };

//   const jsonDrivers = JSON.stringify(driversSend);
//   console.log(jsonDrivers);
// });

// FUNÇÃO P TOGGLE DA DIV DOS BOTÕES

// if($(".chosen-driver-left-text").text().length >0) {
//   console.log($(".chosen-driver-left-text").text().length >0);
//   // $(".toggle-container-compare").toggle();
// };

// <!-- SCRIPT P MODAL BOOTSTRAP
// <script type="text/javascript">

// $(document).ready(function(){
//   $("#modalSignIn").modal("show",);
//   console.log("fuuuunca");
// });

// </script>  -->

// SCRIPT PARA SEND DO AJAX DATA DO HOME P COMPARE

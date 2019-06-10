


// simulador Venta-Hipoteca

 $(document).ready(function(){
    $("#ValVenta").change(function(){
        var ValVenta=parseFloat($(this).val());

      
// valores venta hipoteca vendedor
        gastosnotarialesvendedorhipo=(ValVenta*(3.5/1000))/2;
        hojasnotarialesvendedorhipo=180000;
        fotocopiasotrosvendedorhipo=100000;
        supernotariadovendedorhipo=15000;
        retencionvendedorhipo=ValVenta*(0.01);
        ivagastosnotarialesvendedorhipo=gastosnotarialesvendedorhipo*(19/100);
        ivahojasnotarialesvendedorhipo=hojasnotarialesvendedorhipo*(19/100);
        ivaotrosfotocopiasautenvendedorhipo=fotocopiasotrosvendedorhipo*(19/100);
        ivatotalhipo=ivagastosnotarialesvendedorhipo+ivahojasnotarialesvendedorhipo+ivaotrosfotocopiasautenvendedorhipo;
        ivavendedorhipo=ivatotalhipo/2;
        totalvhipo=gastosnotarialesvendedorhipo+hojasnotarialesvendedorhipo+fotocopiasotrosvendedorhipo+supernotariadovendedorhipo+retencionvendedorhipo+ivavendedorhipo;
        juridico=ValVenta*(0.025);
        totalvhipojuridico=totalvhipo+juridico;


// valores venta hipoteca vendedor

		hojasnotarialescompradorhipohipoteca=144000;
		registrocompradorhipoventa=ValVenta*(7.5/1000);
		gastosnotarialescompradorhipoventa=gastosnotarialesvendedorhipo;
		hojasnotarialescompradorhipoventa=(150*3600)/2;
		fotocopiasotroscompradorhipo=fotocopiasotrosvendedorhipo;
		supernotariadocompradorhipo=supernotariadovendedorhipo;
		benecompradorhipo=retencionvendedorhipo;
		ivacompradorventahipo=ivavendedorhipo;
    Mayorcompra=ValVenta*(0.02);
    valorprueba=ValVenta;


		totalchipotecass=gastosnotarialescompradorhipoventa+hojasnotarialescompradorhipoventa+hojasnotarialescompradorhipohipoteca+fotocopiasotroscompradorhipo+supernotariadocompradorhipo+registrocompradorhipoventa+benecompradorhipo+ivacompradorventahipo;

// formulario gastos vendedor hipoteca
        $("#gastosnotarialesvendedorhipo").val(gastosnotarialesvendedorhipo);
        $("#hojasnotarialesvendedorhipo").val(hojasnotarialesvendedorhipo);
        $("#fotocopiasotrosvendedorhipo").val(fotocopiasotrosvendedorhipo);
        $("#supernotariadovendedorhipo").val(supernotariadovendedorhipo);
        $("#retencionvendedorhipo").val(retencionvendedorhipo);
        $("#ivavendedorhipo").val(ivavendedorhipo);
        $("#totalvhipo").val(gastosnotarialesvendedorhipo+hojasnotarialesvendedorhipo+fotocopiasotrosvendedorhipo+supernotariadovendedorhipo+retencionvendedorhipo+ivavendedorhipo); //total vendedor
        //$("#totalvhipo")toFixed(2);

         $("#totalvhipojuridico").val(gastosnotarialesvendedorhipo+hojasnotarialesvendedorhipo+fotocopiasotrosvendedorhipo+supernotariadovendedorhipo+retencionvendedorhipo+ivavendedorhipo+juridico);
// formulario gastos comprador

        $("#gastosnotarialescompradorhipoventa").val(gastosnotarialescompradorhipoventa);
        $("#hojasnotarialescompradorhipoventa").val(hojasnotarialescompradorhipoventa);
        $("#hojasnotarialescompradorhipohipoteca").val(hojasnotarialescompradorhipohipoteca);
        $("#fotocopiasotroscompradorhipo").val(fotocopiasotroscompradorhipo);
        $("#supernotariadocompradorhipo").val(supernotariadocompradorhipo);
        $("#registrocompradorhipoventa").val(registrocompradorhipoventa);
        $("#benecompradorhipo").val(benecompradorhipo);
        $("#ivacompradorventahipo").val(ivacompradorventahipo);

    });


  });

 $(document).ready(function(){
    $("#ValHipoteca").change(function(){
        var ValHipoteca=parseFloat($(this).val());


         operaciongastosnotarialescompradorhipohipoteca=ValHipoteca*(3.5/1000);
         gastosnotarialescompradorhipohipoteca=operaciongastosnotarialescompradorhipohipoteca*(70/100);
         operacionregistrocompradorhipohipoteca=ValHipoteca*(6.12/1000);
		 registrocompradorhipohipoteca=operacionregistrocompradorhipohipoteca*(70/100);
		 operacionimpuestoscompradorhipo=registrocompradorhipohipoteca+registrocompradorhipoventa;
		 impuestoscompradorhipo=(operacionimpuestoscompradorhipo*(2/100))+20000;
      Mayor=Mayorcompra;     // mayor a 910 millones
      valorcompra=valorprueba;


		 ivagastosnotarialescompradorhipohipoteca=gastosnotarialescompradorhipohipoteca*(19/100);
		 ivahojasnotarialescompradorhipohipoteca=hojasnotarialescompradorhipohipoteca*(19/100);
		 ivacompradorhipohipoteca=ivagastosnotarialescompradorhipohipoteca+ivahojasnotarialescompradorhipohipoteca;


		 totalchipoteca=totalchipotecass+gastosnotarialescompradorhipohipoteca+registrocompradorhipohipoteca+impuestoscompradorhipo+ivacompradorhipohipoteca;
     totalchipotecajuridico=totalchipotecass+gastosnotarialescompradorhipohipoteca+registrocompradorhipohipoteca+impuestoscompradorhipo+ivacompradorhipohipoteca+juridico;


         $("#gastosnotarialescompradorhipohipoteca").val(gastosnotarialescompradorhipohipoteca);
         $("#registrocompradorhipohipoteca").val(registrocompradorhipohipoteca);
         $("#impuestoscompradorhipo").val(impuestoscompradorhipo);
         $("#ivacompradorhipohipoteca").val(ivacompradorhipohipoteca);


          if (valorcompra >= 918346000) {

                 $("#totalchipoteca").val(totalchipoteca+Mayor);//total comprador
                 $("#totalchipotecajuridico").val(totalchipotecajuridico+Mayor);//total comprador

        } else {
                 $("#totalchipoteca").val(totalchipoteca);//total comprador
                 $("#totalchipotecajuridico").val(totalchipotecajuridico);//total comprador
        }


    });


  });

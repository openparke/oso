 // Simulador Leasing

 $(document).ready(function(){
    $("#ValEscritura").change(function(){
        var ValEscritura=parseFloat($(this).val());



// valores para multiplicar
        Retencion=ValEscritura*(0.01);
        // Retencion.toFixed(2);
        gastosnotarialestotales=ValEscritura*(3.5/1000);
        hojasnotarialestotales=100*3600;
        otrosfotocopiasauten=100000;
        benefi=ValEscritura*(0.01);
        registro=ValEscritura*(7.5/1000);
        impotros=40000;
        supernotariado=30000;

// valores iva
        ivagastosnotariales=gastosnotarialestotales*(19/100);
        ivahojasnotariales=hojasnotarialestotales*(19/100);
        ivaotrosfotocopiasauten=otrosfotocopiasauten*(19/100);
        ivatotal=ivagastosnotariales+ivahojasnotariales+ivaotrosfotocopiasauten;
        ivavendedor=ivatotal/2;
        ivacomprador=ivatotal/2;


// valores vendedor
        gastosnotarialesvendedor=gastosnotarialestotales/2;
        hojasnotarialesvendedor=hojasnotarialestotales/2;
        fotocopiasotrosvendedor=otrosfotocopiasauten/2;
        supernotariadovendedor=supernotariado/2;
// valores comprador
        gastosnotarialescomprador=gastosnotarialestotales/2;
        hojasnotarialescomprador=hojasnotarialestotales/2;
        fotocopiasotroscomprador=otrosfotocopiasauten/2;
        supernotariadocomprador=supernotariado/2;

//datos vista
// formulario gastos vendedor
        $("#gastosnotarialesvendedor").val(gastosnotarialesvendedor);    
        $("#hojasnotarialesvendedor").val(hojasnotarialesvendedor);
        $("#fotocopiasotrosvendedor").val(fotocopiasotrosvendedor);
        $("#supernotariadovendedor").val(supernotariadovendedor);
        $("#Retencion").val(Retencion);
        $("#ivavendedor").val(ivavendedor);
        $("#totalv").val(gastosnotarialesvendedor+hojasnotarialesvendedor+fotocopiasotrosvendedor+supernotariadovendedor+Retencion+ivavendedor); //total vendedor
// formulario gastos comprador
                                    
        $("#gastosnotarialescomprador").val(gastosnotarialescomprador);    
        $("#hojasnotarialescomprador").val(hojasnotarialescomprador);  
        $("#fotocopiasotroscomprador").val(fotocopiasotroscomprador);
        $("#supernotariadocomprador").val(supernotariadocomprador);
        $("#impotros").val(impotros); 
        $("#registro").val(registro);       
        $("#benefi").val(benefi); 
        $("#ivacomprador").val(ivacomprador);
        $("#totalc").val(gastosnotarialescomprador+hojasnotarialescomprador+fotocopiasotroscomprador+supernotariadocomprador+impotros+registro+benefi+ivacomprador);//total comprador
    });


  });


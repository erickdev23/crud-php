<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["nombre"]);
    if(empty($input_name)){
        $name_err = "Por favor ingrese el nombre del paciente.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Por favor ingrese un nombre válido.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_sexo = trim($_POST["sexo"]);
    if(empty($input_sexo)){
        $sexo_err = "Por favor ingrese una edad valida.";     
    } else{
        $sexo = $input_sexo;
    }
    
    // Validate salary
    $input_edad = trim($_POST["edad"]);
    if(empty($input_edad)){
        $edad_err = "Por favor ingrese un valor correcto.";     
    } elseif(!ctype_digit($input_edad)){
        $edad_err = "Por favor ingrese un valor correcto y positivo.";
    } else{
        $edad = $input_edad;
    }
    
   //domicilio  
   $input_domicilio = trim($_POST["domicilio"]);
    if(empty($input_domicilio)){
        $domicilio_err = "Por favor ingrese un domicilio valida.";     
    } else{
        $domicilio = $input_domicilio;
    }

    //Escolaridad 
    $input_escolaridad = trim($_POST["escolaridad"]);
    if(empty($input_escolaridad)){
        $escolaridad_err = "Por favor ingrese un dato valido.";     
    } else{
        $escolaridad = $input_escolaridad;
    }
    
    //ocupacion

    $input_ocupacion = trim($_POST["ocupacion"]);
    if(empty($input_ocupacion)){
        $ocupacion_err = "Por favor ingrese una ocupacion valida.";     
    } else{
        $ocupacion = $input_ocupacion;
    }
    
    //Estado Civil
    $input_estadocivil = trim($_POST["estadocivil"]);
    if(empty($input_estadocivil)){
        $estadocivil_err = "Por favor ingrese un dato valido.";     
    } else{
        $estadocivil = $input_estadocivil;
    }

    //religion 

    $input_religion = trim($_POST["religion"]);
    if(empty($input_religion)){
        $religion_err = "Por favor ingrese un dato valido.";     
    } else{
        $religion = $input_religion;
    }
    
    //Alergias
    $input_alergias = trim($_POST["alergias"]);
    if(empty($input_alergias)){
        $alergias_err = "Por favor ingrese un dato valido.";     
    } else{
        $alergias = $input_alergias;
    }
    
    //rh
    $input_rh = trim($_POST["rh"]);
    if(empty($input_rh)){
        $rh_err = "Por favor ingrese un dato valido.";     
    } else{
        $rh = $input_rh;
    }
    

    //Temperatura

    $input_temperatura = trim($_POST["temperatura"]);
    if(empty($input_temperatura)){
        $temperatura_err = "Por favor ingrese un dato valido.";     
    } else{
        $temperatura = $input_temperatura;
    }
    
    //pulso 
    $input_pulso = trim($_POST["pulso"]);
    if(empty($input_pulso)){
        $pulso_err = "Por favor ingrese un dato valido.";     
    } else{
        $pulso = $input_pulso;
    }

    //presion
    $input_frecuencia = trim($_POST["frecuencia"]);
    if(empty($input_frecuencia)){
        $frecuencia_err = "Por favor ingrese un dato valido.";     
    } else{
        $frecuencia = $input_frecuencia;
    }

    //presion

    $input_presion = trim($_POST["presion"]);
    if(empty($input_presion)){
        $presion_err = "Por favor ingrese un dato valido.";     
    } else{
        $presion = $input_presion;
    }
    
  //Talla

  $input_talla = trim($_POST["talla"]);
    if(empty($input_talla)){
        $talla_err = "Por favor ingrese un dato valido.";     
    } else{
        $talla = $input_talla;
    }
    
   //peso


  $input_peso = trim($_POST["peso"]);
  if(empty($input_peso)){
      $peso_err = "Por favor ingrese un dato valido.";     
  } else{
      $peso = $input_peso;
  }


  //imc
  $input_imc = trim($_POST["imc"]);
  if(empty($input_imc)){
      $imc_err = "Por favor ingrese un dato valido.";     
  } else{
      $imc = $input_imc;
  }

//antecedentes familiares


$input_antecedentesfam = trim($_POST["antecedentesfam"]);
if(empty($input_antecedentesfam)){
    $antecedentesfam_err = "Por favor ingrese un dato valido.";     
} else{
    $antecedentesfam = $input_antecedentesfam;
}

//antecedentes personales no patologicos 


$input_antecedentespnp = trim($_POST["antecedentespnp"]);
if(empty($input_antecedentespnp)){
    $antecedentespnp_err = "Por favor ingrese un dato valido.";     
} else{
    $antecedentespnp = $input_antecedentespnp;
}

//antecedentes personlaes patologicos 


$input_antecedentespp = trim($_POST["antecedentespp"]);
if(empty($input_antecedentespp)){
    $antecedentespp_err = "Por favor ingrese un dato valido.";     
} else{
    $antecedentespp = $input_antecedentespp;
}


//padecimiento


$input_padecimiento = trim($_POST["padecimiento"]);
if(empty($input_padecimiento)){
    $padecimiento_err = "Por favor ingrese un dato valido.";     
} else{
    $padecimiento = $input_padecimiento;
}

//sistema respiratorio

$input_srepiratorio = trim($_POST["srepiratorio"]);
if(empty($input_srepiratorio)){
    $srepiratorio_err = "Por favor ingrese un dato valido.";     
} else{
    $srepiratorio = $input_srepiratorio;
}

//sistema cardiaco


$input_scardio = trim($_POST["scardio"]);
if(empty($input_scardio)){
    $scardio_err = "Por favor ingrese un dato valido.";     
} else{
    $scardio = $input_scardio;
}

//sistema digestivo 

$input_sdigestivo = trim($_POST["sdigestivo"]);
if(empty($input_sdigestivo)){
    $sdigestivo_err = "Por favor ingrese un dato valido.";     
} else{
    $sdigestivo = $input_sdigestivo;
}

//sistema urinario

$input_surinario = trim($_POST["surinario"]);
if(empty($input_surinario)){
    $surinario_err = "Por favor ingrese un dato valido.";     
} else{
    $surinario = $input_surinario;
}

//sistema genital

$input_sgenital = trim($_POST["sgenital"]);
if(empty($input_sgenital)){
    $sgenital_err = "Por favor ingrese un dato valido.";     
} else{
    $sgenital = $input_sgenital;
}
//sistema nervioso

$input_snervioso = trim($_POST["snervioso"]);
if(empty($input_snervioso)){
    $snervioso_err = "Por favor ingrese un dato valido.";     
} else{
    $snervioso = $input_sendo;
}
//sistema endocrino

$input_sendo = trim($_POST["sendo"]);
if(empty($input_sendo)){
    $sendo_err = "Por favor ingrese un dato valido.";     
} else{
    $sendo = $input_sendo;
}

//sistema linfatico
$input_slinfatico = trim($_POST["slinfatico"]);
if(empty($input_slinfatico)){
    $slinfatico_err = "Por favor ingrese un dato valido.";     
} else{
    $slinfatico = $input_slinfatico;
}

//sistema piel

$input_spiel = trim($_POST["spiel"]);
if(empty($input_spiel)){
    $spiel_err = "Por favor ingrese un dato valido.";     
} else{
    $spiel = $input_spiel;
}

//habitus

$input_habitus = trim($_POST["habitus"]);
if(empty($input_habitus)){
    $habitus_err = "Por favor ingrese un dato valido.";     
} else{
    $habitus = $input_habitus;
}

//cabeza
$input_cabeza = trim($_POST["cabeza"]);
if(empty($input_cabeza)){
    $cabeza_err = "Por favor ingrese un dato valido.";     
} else{
    $cabeza = $input_cabeza;
}

//cuello

$input_cuello = trim($_POST["cuello"]);
if(empty($input_cuello)){
    $cuello_err = "Por favor ingrese un dato valido.";     
} else{
    $cuello = $input_cuello;
}

//torax

$input_torax = trim($_POST["torax"]);
if(empty($input_torax)){
    $torax_err = "Por favor ingrese un dato valido.";     
} else{
    $torax = $input_torax;
}

//extremidades


$input_extremidades = trim($_POST["extremidades"]);
if(empty($input_extremidades)){
    $extremidades_err = "Por favor ingrese un dato valido.";     
} else{
    $extremidades = $input_extremidades;
}

//columna

$input_columna = trim($_POST["columna"]);
if(empty($input_columna)){
    $columna_err = "Por favor ingrese un dato valido.";     
} else{
    $columna = $input_columna;
}

//genitales
$input_genitales = trim($_POST["genitales"]);
if(empty($input_genitales)){
    $genitales_err = "Por favor ingrese un dato valido.";     
} else{
    $genitales = $input_genitales;
}

//sistema neurologico

$input_neu = trim($_POST["neu"]);
if(empty($input_neu)){
    $neu_err = "Por favor ingrese un dato valido.";     
} else{
    $neu = $input_neu;
}

//diagnostico

$input_diagnostico = trim($_POST["diagnostico"]);
if(empty($input_diagnostico)){
    $diagnostico_err = "Por favor ingrese un dato valido.";     
} else{
    $diagnostico = $input_diagnostico;
}

//visitas

$input_visitas = trim($_POST["visitas"]);
if(empty($input_visitas)){
    $visitas_err = "Por favor ingrese un dato valido.";     
} else{
    $visitas = $input_visitas;
}




    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO "paciente" (idpaciente, nombre, edad, sexo, domicilio, escolaridad, ocupacion, estadocivil, religion, alergias, rh, temperatura, pulso, frecuencia, presion, talla, peso, imc, antecedentesfam, antecedentespnp, antecedentespp, padecimiento, srespiratorio, scardio, sdigestivo, surinario, sgenital, snervioso, sendo, slinfatico, spiel, habitus, cabeza, cuello, torax, extremidades, columna, genitales, neu, diagnostico, visitas) VALUES (?, ?, ? ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_nombre, $param_sexo, $param_edad,$param_domicilio,$param_escolaridad,$param_ocupacion,$param_estadocivil,$param_religion,$param_alergias,$param_rh,$param_temperatura,$param_pulso,$param_frecuencia,$param_presion,$param_talla,$param_peso,$param_imc,$param_antecedentesfam,$param_antecedentespnp,$param_antecedentespp,$param_padecimiento,$param_srespiratorio,$param_scardio,$param_sdigestivo,$param_surinario,$param_sgenital,$param_snervioso,$param_sendo,$param_slinfatico,$param_spiel,$param_habitus,$param_cabeza,$param_cuello,$param_torax,$param_extremidades,$param_columna,$param_genitales,$param_neu,$param_diagnostico,$param_visitas,);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_sexo = $sexo;
            $param_edad = $edad;
            $param_domicilio = $domicilio;
            $param_escolaridad = $escolaridad;
            $param_ocupacion = $ocupacion;
            $param_estadocivil = $estadocivil;
            $param_religion = $religion;
            $param_alergias = $alergias;
            $param_rh = $rh;
            $param_temperatura = $temperatura;
            $param_pulso = $pulso;
            $param_frecuencia = $frecuencia;
            $param_presion = $presion;
            $param_talla = $talla;
            $param_peso = $peso;
            $param_imc = $imc;
            $param_antecedentesfam = $antecedentesfam;
            $param_antecedentespnp = $antecedentespnp;
            $param_antecedentespp = $antecedentespp;
            $param_padecimiento = $padecimiento;
            $param_srespiratorio = $srepiratorio;
            $param_scardio = $scardio;
            $param_sdigestivo = $sdigestivo;
            $param_surinario = $surinario;
            $param_sgenital = $sgenital;
            $param_snervioso = $snervioso;
            $param_sendo = $sendo;
            $param_slinfatico = $slinfatico;
            $param_spiel = $spiel;
            $param_habitus = $habitus;
            $param_cabeza = $cabeza;
            $param_cuello = $cuello;
            $param_torax = $torax;
            $param_extremidades = $extremidades;
            $param_columna = $columna;
            $param_genitales = $genitales;
            $param_neu = $neu;
            $param_diagnostico = $diagnostico;
            $param_visitas = $visitas;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Paciente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Agregar Paciente</h2>
                    </div>
                    <p>llenar el  el siguiente formulario, para agregar un Paciente.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($nombre_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre; ?>">
                            <span class="help-block"><?php echo $nombre_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($sexo_err)) ? 'has-error' : ''; ?>">
                            <label>Sexo</label>
                            <textarea name="sexo" class="form-control"><?php echo $sexo; ?></textarea>
                            <span class="help-block"><?php echo $sexo_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($edad_err)) ? 'has-error' : ''; ?>">
                            <label>Edad</label>
                            <input type="text" name="edad" class="form-control" value="<?php echo $edad; ?>">
                            <span class="help-block"><?php echo $edad_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($domicilio_err)) ? 'has-error' : ''; ?>">
                            <label>domicilio</label>
                            <input type="text" name="domicilio" class="form-control" value="<?php echo $domicilio; ?>">
                            <span class="help-block"><?php echo $domicilio_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($escolaridad_err)) ? 'has-error' : ''; ?>">
                            <label>Escolaridad</label>
                            <input type="text" name="escolaridad" class="form-control" value="<?php echo $escolaridad; ?>">
                            <span class="help-block"><?php echo $escolaridad_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($ocupacion_err)) ? 'has-error' : ''; ?>">
                            <label>Ocupacion</label>
                            <input type="text" name="ocupacion" class="form-control" value="<?php echo $ocupacion; ?>">
                            <span class="help-block"><?php echo $ocupacion_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($estadocivil_err)) ? 'has-error' : ''; ?>">
                            <label>Estado Civil</label>
                            <input type="text" name="estadocivil" class="form-control" value="<?php echo $estadocivil; ?>">
                            <span class="help-block"><?php echo $estadocivil_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($religion_err)) ? 'has-error' : ''; ?>">
                            <label>Religion</label>
                            <input type="text" name="religion" class="form-control" value="<?php echo $religion; ?>">
                            <span class="help-block"><?php echo $religion_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($alergias_err)) ? 'has-error' : ''; ?>">
                            <label>Alergias</label>
                            <input type="text" name="alergias" class="form-control" value="<?php echo $alergias; ?>">
                            <span class="help-block"><?php echo $alergias_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($rh_err)) ? 'has-error' : ''; ?>">
                            <label>RH</label>
                            <input type="text" name="rh" class="form-control" value="<?php echo $rh; ?>">
                            <span class="help-block"><?php echo $rh_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($Temperatura_err)) ? 'has-error' : ''; ?>">
                            <label>Temperatura</label>
                            <input type="text" name="temperatura" class="form-control" value="<?php echo $temperatura; ?>">
                            <span class="help-block"><?php echo $temperatura_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($pulso_err)) ? 'has-error' : ''; ?>">
                            <label>Pulso</label>
                            <input type="text" name="pulso" class="form-control" value="<?php echo $pulso; ?>">
                            <span class="help-block"><?php echo $puslo_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($frecuencia_err)) ? 'has-error' : ''; ?>">
                            <label>Frecuencia</label>
                            <input type="text" name="frecuencia" class="form-control" value="<?php echo $frecuencia; ?>">
                            <span class="help-block"><?php echo $frecuencia_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($presion_err)) ? 'has-error' : ''; ?>">
                            <label>Presion</label>
                            <input type="text" name="presion" class="form-control" value="<?php echo $presion; ?>">
                            <span class="help-block"><?php echo $presion_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($talla_err)) ? 'has-error' : ''; ?>">
                            <label>Talla</label>
                            <input type="text" name="talla" class="form-control" value="<?php echo $talla; ?>">
                            <span class="help-block"><?php echo $talla_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($peso_err)) ? 'has-error' : ''; ?>">
                            <label>Peso</label>
                            <input type="text" name="peso" class="form-control" value="<?php echo $peso; ?>">
                            <span class="help-block"><?php echo $peso_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($imc_err)) ? 'has-error' : ''; ?>">
                            <label>IMC</label>
                            <input type="text" name="imc" class="form-control" value="<?php echo $imc; ?>">
                            <span class="help-block"><?php echo $imc_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($antecedentesfam_err)) ? 'has-error' : ''; ?>">
                            <label>Antecedentes Familiares</label>
                            <input type="text" name="antecedentesfam" class="form-control" value="<?php echo $antecedentesfam; ?>">
                            <span class="help-block"><?php echo $antecedentesfam_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($antecedentespnp_err)) ? 'has-error' : ''; ?>">
                            <label>Antecedentes Personales no Patologicos</label>
                            <input type="text" name="antecedentespnp" class="form-control" value="<?php echo $antecedentespnp; ?>">
                            <span class="help-block"><?php echo $antecedentespnp_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($antecedentespp_err)) ? 'has-error' : ''; ?>">
                            <label>Antecedentes Personales Patologicos</label>
                            <input type="text" name="antecedentespp" class="form-control" value="<?php echo $antecedentespp; ?>">
                            <span class="help-block"><?php echo $antecedentespp_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($padecimiento_err)) ? 'has-error' : ''; ?>">
                            <label>Padecimiento</label>
                            <input type="text" name="padecimiento" class="form-control" value="<?php echo $padecimiento; ?>">
                            <span class="help-block"><?php echo $padecimiento_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($srespiratorio_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Respiratorio</label>
                            <input type="text" name="srespiratorio" class="form-control" value="<?php echo $srepiratorio; ?>">
                            <span class="help-block"><?php echo $srespiratorio_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($scardio_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Cardiovascular</label>
                            <input type="text" name="scardio" class="form-control" value="<?php echo $scardio; ?>">
                            <span class="help-block"><?php echo $scardio_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($sdigestivo_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Digestivo</label>
                            <input type="text" name="sdigestivo" class="form-control" value="<?php echo $sdigestivo; ?>">
                            <span class="help-block"><?php echo $sdigestivo_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($surinario_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Urinario</label>
                            <input type="text" name="surinario" class="form-control" value="<?php echo $surinario; ?>">
                            <span class="help-block"><?php echo $surinario_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($sgenital_err)) ? 'has-error' : ''; ?>">
                            <label>Genitales</label>
                            <input type="text" name="sgenital" class="form-control" value="<?php echo $sgenital; ?>">
                            <span class="help-block"><?php echo $sgenital_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($snervioso_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Nervioso</label>
                            <input type="text" name="snervioso" class="form-control" value="<?php echo $snervioso; ?>">
                            <span class="help-block"><?php echo $snervioso_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($sendo_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Endocrino</label>
                            <input type="text" name="sendo" class="form-control" value="<?php echo $sendo; ?>">
                            <span class="help-block"><?php echo $sendo_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($slinfatico_err)) ? 'has-error' : ''; ?>">
                            <label>sistema Linfatico</label>
                            <input type="text" name="slinfatico" class="form-control" value="<?php echo $slinfatico; ?>">
                            <span class="help-block"><?php echo $slinfatico_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($spiel_err)) ? 'has-error' : ''; ?>">
                            <label>Piel</label>
                            <input type="text" name="spiel" class="form-control" value="<?php echo $spiel; ?>">
                            <span class="help-block"><?php echo $spiel_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($habitus_err)) ? 'has-error' : ''; ?>">
                            <label>Habitus</label>
                            <input type="text" name="habitus" class="form-control" value="<?php echo $habitus; ?>">
                            <span class="help-block"><?php echo $habitus_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($cabeza_err)) ? 'has-error' : ''; ?>">
                            <label>Cabeza</label>
                            <input type="text" name="cabeza" class="form-control" value="<?php echo $cabeza; ?>">
                            <span class="help-block"><?php echo $cabeza_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($cuello_err)) ? 'has-error' : ''; ?>">
                            <label>Cuello</label>
                            <input type="text" name="cuello" class="form-control" value="<?php echo $cuello; ?>">
                            <span class="help-block"><?php echo $cuello_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($torax_err)) ? 'has-error' : ''; ?>">
                            <label>Torax</label>
                            <input type="text" name="torax" class="form-control" value="<?php echo $torax; ?>">
                            <span class="help-block"><?php echo $torax_err;?></span>
                        </div>
                        

                        <div class="form-group <?php echo (!empty($exremidades_err)) ? 'has-error' : ''; ?>">
                            <label>Extremidades</label>
                            <input type="text" name="extremidades" class="form-control" value="<?php echo $extremidades; ?>">
                            <span class="help-block"><?php echo $extremidades_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($columna_err)) ? 'has-error' : ''; ?>">
                            <label>Columna</label>
                            <input type="text" name="columna" class="form-control" value="<?php echo $columna; ?>">
                            <span class="help-block"><?php echo $columna_err;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($genitales_err)) ? 'has-error' : ''; ?>">
                            <label>Genitales</label>
                            <input type="text" name="genitales" class="form-control" value="<?php echo $genitales; ?>">
                            <span class="help-block"><?php echo $genitales_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($neu_err)) ? 'has-error' : ''; ?>">
                            <label>Sistema Neurologico</label>
                            <input type="text" name="neu" class="form-control" value="<?php echo $neu; ?>">
                            <span class="help-block"><?php echo $neu_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($diagnostico_err)) ? 'has-error' : ''; ?>">
                            <label>Diagnostico</label>
                            <input type="text" name="diagnostico" class="form-control" value="<?php echo $diagnostico; ?>">
                            <span class="help-block"><?php echo $diagnostico_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($visitas_err)) ? 'has-error' : ''; ?>">
                            <label>Visitas</label>
                            <input type="text" name="visitas" class="form-control" value="<?php echo $visitas; ?>">
                            <span class="help-block"><?php echo $visitas_err;?></span>
                        </div>
                        
                        
                        
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
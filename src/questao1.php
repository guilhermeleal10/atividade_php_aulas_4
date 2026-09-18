<?php

$animal = (string) "";

$respostaMamifero = (string) readline("\nÉ mamífero? (sim/nao): ");
$ehMamifero = (bool) ($respostaMamifero === "sim");

if ($ehMamifero) {
    $respostaQuadrupede = (string) readline("\nÉ quadrúpede? (sim/nao): ");
    $ehQuadrupede = (bool) ($respostaQuadrupede === "sim");

    if ($ehQuadrupede) {
        $respostaCarnivoro = (string) readline("\nÉ carnívoro? (sim/nao): ");
        $ehCarnivoro = (bool) ($respostaCarnivoro === "sim");

        if ($ehCarnivoro) {
            $animal = (string) "leão";
        } else {
            $respostaHerbivoro = (string) readline("\nÉ herbívoro? (sim/nao): ");
            $ehHerbivoro = (bool) ($respostaHerbivoro === "sim");

            if ($ehHerbivoro) {
                $animal = (string) "\ncavalo";
            } else {
                $animal = (string) "\nnão identificado!";
            }
        }
    } else {
        $respostaVoador = (string) readline("\nEle Voa? (sim/nao): ");
        $ehVoador = (bool) ($respostaVoador === "sim");

        if ($ehVoador) {
            $animal = (string) "morcego";
        } else {
            $respostaAquatico = (string) readline("\nÉ aquático? (sim/nao): ");
            $ehAquatico = (bool) ($respostaAquatico === "sim");

            if ($ehAquatico) {
                $animal = (string) "\nbaleia";
            } else {
                $respostaBipede = (string) readline("\nÉ bípede? (sim/nao): ");
                $ehBipede = (bool) ($respostaBipede === "sim");

                if ($ehBipede) {
                    $animal = (string) "homem";
                } else {
                    $respostaArboreo = (string) readline("\nVive em árvores? (sim/nao): ");
                    $ehArboreo = (bool) ($respostaArboreo === "sim");

                    if ($ehArboreo) {
                        $animal = (string) "\nmacaco";
                    } else {
                        $animal = (string) "\nnão identificado";
                    }
                }
            }
        }
    }
} 
elseif ($ehMamifero === false) {
    $respostaAve = (string) readline("\nÉ uma ave? (sim/nao): ");
    $ehAve = (bool) ($respostaAve === "sim");

    if ($ehAve) {
        $respostaNaoVoadora = (string) readline("\nÉ não voadora? (sim/nao): ");
        $ehNaoVoadora = (bool) ($respostaNaoVoadora === "sim");

        if ($ehNaoVoadora) {
            $respostaTropical = (string) readline("\nÉ tropical? (sim/nao): ");
            $ehTropical = (bool) ($respostaTropical === "sim");

            if ($ehTropical) {
                $animal = (string) "avestruz";
            } else {
                $respostaPolar = (string) readline("\nÉ polar? (sim/nao): ");
                $ehPolar = (bool) ($respostaPolar === "sim");

                if ($ehPolar) {
                    $animal = (string) "pinguim";
                } else {
                    $animal = (string) "não identificado";
                }
            }
        } else {
            $respostaAquatico = (string) readline("\nÉ aquática? (sim/nao): ");
            $ehAquatico = (bool) ($respostaAquatico === "sim");

            if ($ehAquatico) {
                $animal = (string) "pato";
            } else {
                $respostaCarnivoro = (string) readline("\n É carnívora? (sim/nao): ");
                $ehCarnivoro = (bool) ($respostaCarnivoro === "sim");

                if ($ehCarnivoro) {
                    $animal = (string) "águia";
                } else {
                    $animal = (string) "não identificado";
                }
            }
        }
    } else {
        $respostaReptil = (string) readline("\nÉ réptil? (sim/nao): ");
        $ehReptil = (bool) ($respostaReptil === "sim");

        if ($ehReptil) {
            $respostaCasco = (string) readline("\nTem casco? (sim/nao): ");
            $temCasco = (bool) ($respostaCasco === "sim");

            if ($temCasco) {
                $animal = (string) "tartaruga";
            } else {
                $respostaAquatico = (string) readline("\nÉ aquático? (sim/nao): ");
                $ehAquatico = (bool) ($respostaAquatico === "sim");

                if ($ehAquatico) {
                    $animal = (string) "crocodilo";
                } else {
                    $respostaSemPatas = (string) readline("\nNão tem patas? (sim/nao): ");
                    $naoTemPatas = (bool) ($respostaSemPatas === "sim");

                    if ($naoTemPatas) {
                        $animal = (string) "cobra";
                    } else {
                        $animal = (string) "não identificado";
                    }
                }
            }
        } else {
            $animal = (string) "não identificado";
        }
    }
} else {
    $animal = (string) "não identificado";
}

if ($animal === "\nnão identificado!") {
    echo "\nAnimal não identificado.\n";
} else {
    echo "\nEntão o animal escolhido foi " . $animal . ".\n";
}

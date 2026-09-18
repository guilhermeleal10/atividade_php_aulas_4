<?php

$animal = (string) "";

$respostaMamifero = (string) readline("\nÉ mamífero? (sim/nao): ");
$Mamifero = (bool) ($respostaMamifero === "sim");

if ($Mamifero) {
    $respostaQuadrupede = (string) readline("\nÉ quadrúpede? (sim/nao): ");
    $Quadrupede = (bool) ($respostaQuadrupede === "sim");

    if ($Quadrupede) {
        $respostaCarnivoro = (string) readline("\nÉ carnívoro? (sim/nao): ");
        $Carnivoro = (bool) ($respostaCarnivoro === "sim");

        if ($Carnivoro) {
            $animal = (string) "leão";
        } else {
            $respostaHerbivoro = (string) readline("\nÉ herbívoro? (sim/nao): ");
            $Herbivoro = (bool) ($respostaHerbivoro === "sim");

            if ($Herbivoro) {
                $animal = (string) "\ncavalo";
            } else {
                $animal = (string) "\nnão identificado!";
            }
        }
    } else {
        $respostaVoador = (string) readline("\nEle Voa? (sim/nao): ");
        $Voador = (bool) ($respostaVoador === "sim");

        if ($Voador) {
            $animal = (string) "morcego";
        } else {
            $respostaAquatico = (string) readline("\nÉ aquático? (sim/nao): ");
            $Aquatico = (bool) ($respostaAquatico === "sim");

            if ($Aquatico) {
                $animal = (string) "\nbaleia";
            } else {
                $respostaBipede = (string) readline("\nÉ bípede? (sim/nao): ");
                $Bipede = (bool) ($respostaBipede === "sim");

                if ($Bipede) {
                    $animal = (string) "homem";
                } else {
                    $respostaArboreo = (string) readline("\nVive em árvores? (sim/nao): ");
                    $Arboreo = (bool) ($respostaArboreo === "sim");

                    if ($Arboreo) {
                        $animal = (string) "\nmacaco";
                    } else {
                        $animal = (string) "\nnão identificado";
                    }
                }
            }
        }
    }
} 
elseif ($Mamifero === false) {
    $respostaAve = (string) readline("\nÉ uma ave? (sim/nao): ");
    $Ave = (bool) ($respostaAve === "sim");

    if ($Ave) {
        $respostaNaoVoadora = (string) readline("\nÉ não voadora? (sim/nao): ");
        $ehNaoVoadora = (bool) ($respostaNaoVoadora === "sim");

        if ($NaoVoadora) {
            $respostaTropical = (string) readline("\nÉ tropical? (sim/nao): ");
            $Tropical = (bool) ($respostaTropical === "sim");

            if ($Tropical) {
                $animal = (string) "avestruz";
            } else {
                $respostaPolar = (string) readline("\nÉ polar? (sim/nao): ");
                $Polar = (bool) ($respostaPolar === "sim");

                if ($Polar) {
                    $animal = (string) "pinguim";
                } else {
                    $animal = (string) "não identificado";
                }
            }
        } else {
            $respostaAquatico = (string) readline("\nÉ aquática? (sim/nao): ");
            $Aquatico = (bool) ($respostaAquatico === "sim");

            if ($Aquatico) {
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
        $Reptil = (bool) ($respostaReptil === "sim");

        if ($Reptil) {
            $respostaCasco = (string) readline("\nTem casco? (sim/nao): ");
            $temCasco = (bool) ($respostaCasco === "sim");

            if ($temCasco) {
                $animal = (string) "tartaruga";
            } else {
                $respostaAquatico = (string) readline("\nÉ aquático? (sim/nao): ");
                $Aquatico = (bool) ($respostaAquatico === "sim");

                if ($Aquatico) {
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

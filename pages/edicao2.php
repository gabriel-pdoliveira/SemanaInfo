<?php include 'config.php'; ?>
<div class="banner">
    <h1>EDIÇÃO</h1>
    <h1>2022</h1>
</div>


<div class="groupButton">
    <div class="container text-center ">
        <div class="row">
            <div class="col-3">
                <a class="dia1" id="selecionado">06/06</a>
            </div>
            <div class="col-3">
                <a class="dia2">07/06</a>
            </div>
            <div class="col-3">
                <a class="dia3">08/06</a>
            </div>
            <div class="col-3">
                <a class="dia4">09/06</a>
            </div>
        </div>
    </div>
</div>

<div class="grid">

</div>

<script>
    let main = document.querySelector(".grid")

    let lista = {
        1: {
            "nome": "MARCELO AZAMBUJA",
            "titulo": "PERFIL PROFISSIONAL",
            "palestrante": "<?php echo URL ?>imgs/MarceloAzambuja.jpeg",
            "hora": "13h30",
            "palestra": "<?php echo URL ?>imgs/palestraMarcelo.jpg"
        },
        2: {
            "nome": "BABY BOOMER",
            "titulo": "GERAÇÃO BABY BOOMER E O MEDO TECNOLÓGICO",
            "palestrante": "<?php echo URL ?>imgs/Babyboomer.jpeg",
            "hora": "15h",
            "palestra": "<?php echo URL ?>imgs/palestraBabyboomer.jpeg"
        },
        3: {
            "nome": "GUILHERME SCHIRMER",
            "titulo": "MUNDO DOS JOGOS DIGITAIS",
            "palestrante": "<?php echo URL ?>imgs/GulhermeSchirmmer.jpeg",
            "hora": "15h30",
            "palestra": "<?php echo URL ?>imgs/palestraGuilherme.jpeg"
        },
        4: {
            "nome": "IGOR CAMARGO",
            "titulo": "MERCADO DE TRABALHO",
            "palestrante": "<?php echo URL ?>imgs/IgorCamargo.jpeg",
            "hora": "19h30",
            "palestra": "<?php echo URL ?>imgs/Camargo.jpeg"
        },
        5: {
            "nome": "GUSTAVO FARIAS",
            "titulo": "JAVASCRIPT NO MUNDO DEV",
            "palestrante": "<?php echo URL ?>imgs/GustavoFarias.jpeg",
            "hora": "21h",
            "palestra": "<?php echo URL ?>imgs/Gustavo.jpeg"
        },
        6: {
            "nome": "",
            "titulo": "",
            "palestrante": "<?php echo URL ?>imgs/",
            "hora": "",
            "palestra": "<?php echo URL ?>imgs/"
        }
    }

    for (let i = 1; i < 7; i++) {
        if (lista[i].nome != '') {
            let div1 = document.createElement('div')
            div1.setAttribute('class', 'grade')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'imgs text-center')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'palestrante')

            let div5 = document.createElement('div')
            div5.setAttribute('class', 'palestras')

            let div6 = document.createElement('div')
            div6.setAttribute('class', 'descricao')

            let palestra = document.createElement('img')
            palestra.setAttribute('src', lista[i].palestra)

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div6.append(nome)

            if (lista[i].titulo != "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div6.append(titulo)
            }

            div5.append(palestra)
            div4.append(palestrante)

            div3.append(div4)
            div3.append(div5)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div6)

            main.append(div1)
        }
    }




    document.querySelector(".dia1").onclick = () => {
        let botao = document.querySelector(".dia1").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i <= 4; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia1").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.grid')
        main.innerHTML = ""

        for (let i = 1; i <= 7; i++) {
            if (lista[i].nome != '') {
                let div1 = document.createElement('div')
                div1.setAttribute('class', 'grade')

                let div2 = document.createElement('div')
                div2.setAttribute('class', 'header')

                let div3 = document.createElement('div')
                div3.setAttribute('class', 'imgs text-center')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'palestrante')

                let div5 = document.createElement('div')
                div5.setAttribute('class', 'palestras')

                let div6 = document.createElement('div')
                div6.setAttribute('class', 'descricao')

                let palestra = document.createElement('img')
                palestra.setAttribute('src', lista[i].palestra)

                let palestrante = document.createElement('img')
                palestrante.setAttribute('src', lista[i].palestrante)

                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                div6.append(nome)

                if (lista[i].titulo != "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    div6.append(titulo)
                }

                div5.append(palestra)
                div4.append(palestrante)

                div3.append(div4)
                div3.append(div5)

                div2.append(hora)

                div1.append(div2)
                div1.append(div3)
                div1.append(div6)

                main.append(div1)
            }
        }
    }

    document.querySelector(".dia2").onclick = () => {
        let botao = document.querySelector(".dia2").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i <= 4; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia2").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.grid')
        main.innerHTML = ""

        let lista = {
            1: {
                "nome": "LEONARDO SÁPIRAS",
                "titulo": "MOMENTO TECNOLÓGICO E DESAFIOS EM SEGURANÇA DA INFORMAÇÃO",
                "palestrante": "<?php echo URL ?>imgs/leonardo.jpeg",
                "hora": "13h30",
                "palestra": "<?php echo URL ?>imgs/palestraSapiras.jpeg"
            },
            2: {
                "nome": "EDUAMBTEC",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/Eduambitec.jpeg",
                "hora": "15:00",
                "palestra": "<?php echo URL ?>imgs/palestraEduambitec.jpeg"
            },
            3: {
                "nome": "BIBI",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/bibi.jpeg",
                "hora": "15:30",
                "palestra": "<?php echo URL ?>imgs/palestraBibi.jpeg"
            },
            4: {
                "nome": "FELIPE GUIMARÃES",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/felipe.jpeg",
                "hora": "19:30",
                "palestra": "<?php echo URL ?>imgs/felipeGuimaraes.jpeg"
            },
            5: {
                "nome": "MATHEUS FOSCARINI",
                "titulo": "", 
                "palestrante": "<?php echo URL ?>imgs/MatheusFoscarini.jpeg",
                "hora": "21:00",
                "palestra": "<?php echo URL ?>imgs/palestraMatheusFoscarini.jpeg"
            },
            6: {
                "nome": "",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/",
                "hora": "",
                "palestra": "<?php echo URL ?>imgs/"
            }
        }

        for (let i = 1; i < 7; i++) {
            if (lista[i].nome != '') {
                let div1 = document.createElement('div')
                div1.setAttribute('class', 'grade')

                let div2 = document.createElement('div')
                div2.setAttribute('class', 'header')

                let div3 = document.createElement('div')
                div3.setAttribute('class', 'imgs text-center')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'palestrante')

                let div5 = document.createElement('div')
                div5.setAttribute('class', 'palestras')

                let div6 = document.createElement('div')
                div6.setAttribute('class', 'descricao')

                let palestra = document.createElement('img')
                palestra.setAttribute('src', lista[i].palestra)

                let palestrante = document.createElement('img')
                palestrante.setAttribute('src', lista[i].palestrante)

                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                div6.append(nome)

                if (lista[i].titulo != "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    div6.append(titulo)
                }

                div5.append(palestra)
                div4.append(palestrante)

                div3.append(div4)
                div3.append(div5)

                div2.append(hora)

                div1.append(div2)
                div1.append(div3)
                div1.append(div6)

                main.append(div1)
            }
        }
    }

    document.querySelector(".dia3").onclick = () => {
        let botao = document.querySelector(".dia3").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i < 4; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia3").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.grid')
        main.innerHTML = ""

        let lista = {
            1: {
                "nome": "ALEXANDRE MARTINS",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/Alexandre.jpg",
                "hora": "13:30",
                "palestra": "<?php echo URL ?>imgs/palestraAlexandre.jpeg"
            },
            2: {
                "nome": "TEXTRY",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/textry.jpeg",
                "hora": "15:00",
                "palestra": "<?php echo URL ?>imgs/palestraTextry.jpeg"
            },
            3: {
                "nome": "APLICATIVO TURISMO",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/turismo.jpeg",
                "hora": "15:30",
                "palestra": "<?php echo URL ?>imgs/palestraTurismo.jpeg"
            },
            4: {
                "nome": "SMART",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/Smart.jpeg",
                "hora": "16:30",
                "palestra": "<?php echo URL ?>imgs/palestraSmart.jpeg"
            },
            5: {
                "nome": "BENDER",
                "titulo": "Carreira em design em produtos",
                "palestrante": "<?php echo URL ?>imgs/GabrielBender.jpeg",
                "hora": "19:30",
                "palestra": "<?php echo URL ?>imgs/palestraBender.jpeg"
            },
            6: {
                "nome": "FACCAT",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/faccat.jpeg",
                "hora": "20:30",
                "palestra": "<?php echo URL ?>imgs/palestraFaccat.jpeg"
            }
        }

        for (let i = 1; i < 7; i++) {
            if (lista[i].nome != '') {
                let div1 = document.createElement('div')
                div1.setAttribute('class', 'grade')

                let div2 = document.createElement('div')
                div2.setAttribute('class', 'header')

                let div3 = document.createElement('div')
                div3.setAttribute('class', 'imgs text-center')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'palestrante')

                let div5 = document.createElement('div')
                div5.setAttribute('class', 'palestras')

                let div6 = document.createElement('div')
                div6.setAttribute('class', 'descricao')

                let palestra = document.createElement('img')
                palestra.setAttribute('src', lista[i].palestra)

                let palestrante = document.createElement('img')
                palestrante.setAttribute('src', lista[i].palestrante)

                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                div6.append(nome)

                if (lista[i].titulo != "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    div6.append(titulo)
                }

                div5.append(palestra)
                div4.append(palestrante)

                div3.append(div4)
                div3.append(div5)

                div2.append(hora)

                div1.append(div2)
                div1.append(div3)
                div1.append(div6)

                main.append(div1)
            }
        }
    }

    document.querySelector(".dia4").onclick = () => {
        let botao = document.querySelector(".dia4").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i < 4; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia4").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.grid')
        main.innerHTML = ""

        let lista = {
            1: {
                "nome": "CWI",
                "titulo": "QUERO SER DEV",
                "palestrante": "<?php echo URL ?>imgs/cwi.jpeg",
                "hora": "13:30",
                "palestra": "<?php echo URL ?>imgs/palestraCwi.jpeg"
            },
            2: {
                "nome": "",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/",
                "hora": "",
                "palestra": "<?php echo URL ?>imgs/"
            },
            3: {
                "nome": "",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/",
                "hora": "",
                "palestra": "<?php echo URL ?>imgs/"
            },
            4: {
                "nome": "IGOR CAMARGO",
                "titulo": "INTELIGENCIA ARTIFICIAL",
                "palestrante": "<?php echo URL ?>imgs/IgorCamargo.jpeg",
                "hora": "15:30",
                "palestra": "<?php echo URL ?>imgs/palestraIA.jpeg"
            },
            5: {
                "nome": "CWI",
                "titulo": "QUERO SER DEV",
                "palestrante": "<?php echo URL ?>imgs/cwi.jpeg",
                "hora": "19:30",
                "palestra": "<?php echo URL ?>imgs/palestraCwi.jpeg"
            },
            6: {
                "nome": "",
                "titulo": "",
                "palestrante": "<?php echo URL ?>imgs/",
                "hora": "",
                "palestra": "<?php echo URL ?>imgs/"
            }
        }

        for (let i = 1; i < 7; i++) {
            if (lista[i].nome != '') {
                let div1 = document.createElement('div')
                div1.setAttribute('class', 'grade')

                let div2 = document.createElement('div')
                div2.setAttribute('class', 'header')

                let div3 = document.createElement('div')
                div3.setAttribute('class', 'imgs text-center')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'palestrante')

                let div5 = document.createElement('div')
                div5.setAttribute('class', 'palestras')

                let div6 = document.createElement('div')
                div6.setAttribute('class', 'descricao')

                let palestra = document.createElement('img')
                palestra.setAttribute('src', lista[i].palestra)

                let palestrante = document.createElement('img')
                palestrante.setAttribute('src', lista[i].palestrante)

                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                div6.append(nome)

                if (lista[i].titulo != "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    div6.append(titulo)
                }

                div5.append(palestra)
                div4.append(palestrante)

                div3.append(div4)
                div3.append(div5)

                div2.append(hora)

                div1.append(div2)
                div1.append(div3)
                div1.append(div6)

                main.append(div1)
            }
        }
    }
</script>

<div class="banner">
    <h1>EDIÇÃO</h1>
    <h1>2019</h1>
</div>

<div class="groupButton">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a class="dia1" id="selecionado">19/08</a>
            </div>
            <div class="col">
                <a class="dia2">20/08</a>
            </div>
            <div class="col">
                <a class="dia3">21/08</a>
            </div>
            <div class="col">
                <a class="dia4">22/08</a>
            </div>
            <div class="col">
                <a class="dia5">23/08</a>
            </div>
        </div>
    </div>
</div>

<div class="conteudo">
    
</div>

<script>

    let main = document.querySelector('.conteudo')

    let lista = {
        1: {
            "nome": "JULIANO VALENTINI",
            "titulo": "TI: MOMENTO ATUAL E PARA ONDE VAMOS",
            "palestrante": "<?php echo URL ?>imgs/valentini.jpg",
            "hora": "13h30"
        },
        2: {
            "nome": "GUILHERME SCHIRMER",
            "titulo": "JOGOS DIGITAIS: DE JOGADOR A DESENVOLVEDOR",
            "palestrante": "<?php echo URL ?>imgs/GulhermeSchirmmer.jpeg",
            "hora": "16h"
        },
        3: {
            "nome": "JULIANO VALENTINI",
            "titulo": "TI: MOMENTO ATUAL E PARA ONDE VAMOS",
            "palestrante": "<?php echo URL ?>imgs/valentini.jpg",
            "hora": "19H"
        },
        4: {
            "nome": "GUILHERME SCHIRMER",
            "titulo": "JOGOS DIGITAIS: DE JOGADOR A DESENVOLVEDOR",
            "palestrante": "<?php echo URL ?>imgs/GulhermeSchirmmer.jpeg",
            "hora": "21h"
        }
    }

    for (let i = 1; i < 5; i++) {
        if (lista[i].nome != '') {
            console.log('teste ' + lista[i].nome);

            let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)
        }

    }
    document.querySelector('.dia1').onclick = () => {
        let botao = document.querySelector(".dia1").hasAttribute("id")
        if (botao == false) {
            for (let i = 1;i <6; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia1").setAttribute("id", "selecionado")
        }

        let main = document.querySelector('.conteudo')
        main.innerHTML = ""

        for (let i = 1; i < 5; i++) {
            if (lista[i].nome != '') {
                console.log('teste ' + lista[i].nome);

                let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)
            }
        }


    }

    document.querySelector('.dia2').onclick = () => {
        let botao = document.querySelector(".dia2").hasAttribute("id")
        if (botao == false) {
            for (let i = 1;i <6; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia2").setAttribute("id", "selecionado")
        }

        let main = document.querySelector('.conteudo')
    main.innerHTML = ""

        let lista = {
            1: {
                "nome": "GUILHERME LAUCK",
                "titulo": "JOGOS DIGITAIS",
                "palestrante": "<?php echo URL ?>imgs/guilhermeLauck.jpg",
                "hora": "13h30"
            },
            2: {
                "nome": "GUSTAVO FARIAS",
                "titulo": "INGRESSANDO NO MERCADO DE TRABALHO EM TI",
                "palestrante": "<?php echo URL ?>imgs/GustavoFarias.jpeg",
                "hora": "16h"
            },
            3: {
                "nome": "MURILO MOSTHSIN",
                "titulo": "API RESTFUL, MELHOR QUE COAH QUANTICO",
                "palestrante": "<?php echo URL ?>imgs/murilo.jpg",
                "hora": "15:30"
            },
            4: {
                "nome": "STEFANO SORO",
                "titulo": "COMECANDO NA TI: DO CAFE PARA O CODIGO",
                "palestrante": "<?php echo URL ?>imgs/stefanoSoro.jpg",
                "hora": "19:30"
            }
        }

        for (let i = 1; i < 5; i++) {
            if (lista[i].nome != '') {
                console.log('teste ' + lista[i].nome);

                let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)

            }
        }
    }

    document.querySelector('.dia3').onclick = () => {
        let botao = document.querySelector(".dia3").hasAttribute("id")
        if (botao == false) {
            for (let i = 1;i <6; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia3").setAttribute("id", "selecionado")
        }

        let main = document.querySelector('.conteudo')
    main.innerHTML = ""

        let lista = {
        1: {
            "nome": "ALEXANDRE MARTINS",
            "titulo": "CIENCIA DE DADOS E INTELIGENCIA ARTIFICIAL",
            "palestrante": "<?php echo URL ?>imgs/leonardo.jpeg",
            "hora": "13:30"
        },
        2: {
            "nome": "GABRIEL BENDER",
            "titulo": "UX",
            "palestrante": "<?php echo URL ?>imgs/GabrielBender.jpeg",
            "hora": "15:00"
        },
        3: {
            "nome": "GABRIEL BENDER",
            "titulo": "UX",
            "palestrante": "<?php echo URL ?>imgs/GabrielBender.jpeg",
            "hora": "15:30"
        },
        4: {
            "nome": "LUCAS MOLLER",
            "titulo": "INGRESSANDO NO MERCADO DE TRABALHO EM TI",
            "palestrante": "<?php echo URL ?>imgs/moller.jpg",
            "hora": "19:30"
        }
    }

    for (let i = 1; i < 5; i++) {
            if (lista[i].nome != '') {
                console.log('teste ' + lista[i].nome);

                let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)
            }
        }
    }

    document.querySelector('.dia4').onclick = () => {
        let botao = document.querySelector(".dia4").hasAttribute("id")
        if (botao == false) {
            for (let i = 1;i <6; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia4").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.conteudo')
    main.innerHTML = ""

        let lista = {
        1: {
            "nome": "WIZARD",
            "titulo": "PORQUE A FLUENCIA NO INGLES PODE IMPULSIONAR SUA CARREIRA EM TI",
            "palestrante": "<?php echo URL ?>imgs/logo-wizard.png",
            "hora": "13:30"
        },
        2: {
            "nome": "GUSTAVO FARIAS",
            "titulo": "INGRESSANDO NO MERCADO DE TRABALHO EM TI",
            "palestrante": "<?php echo URL ?>imgs/GustavoFarias.jpeg",
            "hora": "16h"
        },
        3: {
            "nome": "MARCELO AZAMBUJA",
            "titulo": "PERFIL PROFISSIONAL",
            "palestrante": "<?php echo URL ?>imgs/MarceloAzambuja.jpeg",
            "hora": "19h"
        },
        4: {
            "nome": "IGOR CAMARGO",
            "titulo": "DESENVOLVIMENTO DE APLICAÇÕES WEB",
            "palestrante": "<?php echo URL ?>imgs/IgorCamargo.jpeg",
            "hora": "21h"
        }
    }

        for (let i = 1; i < 5; i++) {
            if (lista[i].nome != '') {
                console.log('teste ' + lista[i].nome);

                let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)
            }
        }
    }

    document.querySelector('.dia5').onclick = () => {
        let botao = document.querySelector(".dia5").hasAttribute("id")
        if (botao == false) {
            for (let i = 1;i <6; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia5").setAttribute("id", "selecionado")
        }

        let main = document.querySelector('.conteudo')
    main.innerHTML = ""


        let lista = {
        1: {
            "nome": "CWI",
            "titulo": "Legislacao na area de TI",
            "palestrante": "<?php echo URL ?>imgs/Cassiano.jpg",
            "hora": "13:30"
        },
        2: {
            "nome": "Eber Silva",
            "titulo": "Ingressando no mercado de trabalho em TI",
            "palestrante": "<?php echo URL ?>imgs/Eber.jpg",
            "hora": "16h"
        },
        3: {
            "nome": "Eber Silva",
            "titulo": "Ingressando no mercado de trabalho em TI",
            "palestrante": "<?php echo URL ?>imgs/Eber.jpg",
            "hora": "19h"
        },
        4: {
            "nome": "Wizard",
            "titulo": "Porque a influencia do ingles pode impulsionar sua carreira em TI",
            "palestrante": "<?php echo URL ?>imgs/logo-wizard.png",
            "hora": "21h"
        }
    }

        for (let i = 1; i < 5; i++) {
            if (lista[i].nome != '') {
                console.log('teste ' + lista[i].nome);

                let div1 = document.createElement('div')
            div1.setAttribute('class', 'block')

            let div2 = document.createElement('div')
            div2.setAttribute('class', 'header')

            let div3 = document.createElement('div')
            div3.setAttribute('class', 'perfil')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'footer')

            let palestrante = document.createElement('img')
            palestrante.setAttribute('src', lista[i].palestrante)

            let titulo = document.createElement('p')
            titulo.innerHTML = lista[i].titulo

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                div4.append(titulo)
            }

            div3.append(palestrante)

            div2.append(hora)

            div1.append(div2)
            div1.append(div3)
            div1.append(div4)

            main.append(div1)
            }
        }

    }



</script>
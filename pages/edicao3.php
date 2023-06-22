<div class="slider">
    <ul class="brands">
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/mvblue.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/crisdulabs.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/MasterShop.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/W2Brasil.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/Scopi.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/sanvitron.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/LogoFACCAT.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/Vison.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/Pulamaria.png" alt="" class="apoiador"></li>
        <li class="brand-logo"><img src="<?php echo URL ?>imgs/Gaucha.png" alt="" class="apoiador"></li>
    </ul>
</div>


<div class="banner">
    <h1>EDIÇÃO</h1>
    <h1>2023</h1>
</div>


<div class="groupButton">
    <div class="container text-center ">
        <div class="row">
            <div class="col-4">
                <a class="dia1" id="selecionado">12/06</a>
            </div>
            <div class="col-4">
                <a class="dia2">13/06</a>
            </div>
            <div class="col-4">
                <a class="dia3">14/06</a>
            </div>
        </div>
    </div>
</div>

<div class="grid">

</div>

<script>
    const brands = document.querySelector('.brands'),
    total_brand = brands.children.length;

    document.documentElement.style.setProperty('--total-brand', total_brand)

    for (let i = 0; i < total_brand; i++) {
        brands.appendChild(brands.children[i].cloneNode(true))
    }


    let main = document.querySelector('.grid')

    let lista = {
        1: {
            "nome": "Everton Passos",
            "titulo": "Como ser um dev f*da!",
            "foto": "<?php echo URL ?>imgs/EvertonPassos.jpeg",
            "hora": "14h"
        },
        2: {
            "nome": "Nicolas A. Hilbert",
            "titulo": "Plataforma Gamificada de Estudos para o ENEM",
            "foto": "<?php echo URL ?>imgs/NicolasHilbert.jpeg",
            "hora": "15h"
        },
        3: {
            "nome": "Hadassa Müller Pedroso Martins e Gabrielly Tauany Pereira",
            "titulo": "Filtros Tecnológicos: A distorção da realidade.",
            "foto": "<?php echo URL ?>imgs/Hadassa&Gabrielly.jpeg",
            "hora": "15h10"
        },
        4: {
            "nome": "Mateus Dias",
            "titulo": "Tendências do mercado Tech",
            "foto": "<?php echo URL ?>imgs/MatheusFoscarini.jpeg",
            "hora": "15h50"
        },
        5: {
            "nome": "Marcelo Azambuja",
            "titulo": "Machine Learning: Softwares que Aprendem e Prevêem o Futuro",
            "foto": "<?php echo URL ?>imgs/MarceloAzambuja.jpeg",
            "hora": "19h30"
        },
        6: {
            "nome": "Vinicius Marazzoni",
            "titulo": "Criptomoedas e a Revolução 4.0: Explorando os Fundamentos de Blockchain e a Web 3.0",
            "foto": "<?php echo URL ?>imgs/ViniciusMazzaroni.jpeg",
            "hora": "21h"
        },
        7: {
            "nome": "",
            "titulo": "",
            "foto": "",
            "hora": ""
        }
    }

    for (let i = 1; i <= 7; i++) {
        if (!lista[i].nome == "") {
            let div1 = document.createElement("div")
            div1.setAttribute('class', 'bloco')

            let div2 = document.createElement("div")
            div2.setAttribute('class', 'img')

            let div3 = document.createElement("div")
            div3.setAttribute('class', 'desc')

            let div4 = document.createElement('div')
            div4.setAttribute('class', 'infoPalestrantes')

            let foto = document.createElement("img");
            foto.setAttribute('src', lista[i].foto)
            foto.setAttribute('class', '')

            let hora = document.createElement('h3')
            hora.innerHTML = lista[i].hora
            hora.setAttribute('class', '')

            let nome = document.createElement('h2')
            nome.innerHTML = lista[i].nome
            nome.setAttribute('class', '')
            div4.append(nome)

            if (!lista[i].titulo == "") {
                let titulo = document.createElement('p')
                titulo.innerHTML = lista[i].titulo
                titulo.setAttribute('class', '')
                div4.append(titulo)
            }

            div3.append(hora)
            div3.append(div4)

            div2.append(foto)

            div1.append(div2)
            div1.append(div3)

            main.append(div1)
        }
    }

    document.querySelector(".dia1").onclick = () => {
        let botao = document.querySelector(".dia1").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i < 4; i++) {
                if (document.querySelector(".dia" + i).hasAttribute("id") == true) {
                    document.querySelector(".dia" + i).removeAttribute("id")
                }
            }
            document.querySelector(".dia1").setAttribute("id", "selecionado")
        }
        let main = document.querySelector('.grid')
        main.innerHTML = ""

        for (let i = 1; i <= 7; i++) {
            if (!lista[i].nome == "") {
                let div1 = document.createElement("div")
                div1.setAttribute('class', 'bloco')

                let div2 = document.createElement("div")
                div2.setAttribute('class', 'img')

                let div3 = document.createElement("div")
                div3.setAttribute('class', 'desc')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'infoPalestrantes')

                let foto = document.createElement("img");
                foto.setAttribute('src', lista[i].foto)
                foto.setAttribute('class', '')

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora
                hora.setAttribute('class', '')

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                nome.setAttribute('class', '')
                div4.append(nome)

                if (!lista[i].titulo == "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    titulo.setAttribute('class', '')
                    div4.append(titulo)
                }

                div3.append(hora)
                div3.append(div4)

                div2.append(foto)

                div1.append(div2)
                div1.append(div3)

                main.append(div1)
            }
        }
    }

    document.querySelector(".dia2").onclick = () => {
        let botao = document.querySelector(".dia2").hasAttribute("id")
        if (botao == false) {
            for (let i = 1; i < 4; i++) {
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
                "nome": " Painel com: Fabiane Oliveira, Marcos Barão e Fernando Neves",
                "titulo": "Ecossistema de Inovação local: a experiência do Instituto Taquara Mais",
                "foto": "<?php echo URL ?>imgs/taquaraMais.jpg",
                "hora": "13h30"
            },
            2: {
                "nome": "Alexandre Aloys Matte Junior",
                "titulo": "E aí, tá conseguindo acompanhar? – mudanças na sociedade e a conexão das empresas com startup",
                "foto": "<?php echo URL ?>imgs/AlexandreAloys.jpeg",
                "hora": "14h15"
            },
            3: {
                "nome": "Dienifer Ripl e Thales Fantinel",
                "titulo": "PetFlix",
                "foto": "<?php echo URL ?>imgs/Dienifer&Thales.jpeg",
                "hora": "15h"
            },
            4: {
                "nome": "Isadora Vitória Kirsch Ozires dos Santos",
                "titulo": "FSC: Fake Signature Checker",
                "foto": "<?php echo URL ?>imgs/IsadoraKirsch.jpeg",
                "hora": "15h10"
            },
            5: {
                "nome": "Guilherme Reinehr",
                "titulo": "How to Style, site destinado para estilização de vestuário pessoal",
                "foto": "<?php echo URL ?>imgs/GuilhermeReinehr.jpeg",
                "hora": "15h20"
            },
            6: {
                "nome": "Rui Barbosa Jr.",
                "titulo": "Vida de Startup",
                "foto": "<?php echo URL ?>imgs/Rui.jpeg",
                "hora": "15h45"
            },
            7: {
                "nome": "Vinicius Sefrin",
                "titulo": "A Era dos Dados: Oportunidades e Desafios na Análise de Dados",
                "foto": "<?php echo URL ?>imgs/ViniciusSefrin.jpeg",
                "hora": "19h30"
            },
            8: {
                "nome": "Vitória de Senna",
                "titulo": "CIL - Aplicativo para pessoas celíacas e intolerantes a lactose",
                "foto": "<?php echo URL ?>imgs/VitoriaSenna.jpeg",
                "hora": "20h15"
            },
            9: {
                "nome": "José Henrique Trindade",
                "titulo": "J.E.P.E, Jogo de ensino de programação estruturado",
                "foto": "<?php echo URL ?>imgs/JoseTrindade.jpeg",
                "hora": "20h30"
            },
            10: {
                "nome": "Rui Barbosa Jr.",
                "titulo": "Inteligência Artificial - do Perceptron ao Estagiário Virtual.",
                "foto": "<?php echo URL ?>imgs/Rui.jpeg",
                "hora": "21h"
            }            

        }

        for (let i = 1; i <= 10; i++) {
            if (!lista[i].nome == "") {
                let div1 = document.createElement("div")
                div1.setAttribute('class', 'bloco')

                let div2 = document.createElement("div")
                div2.setAttribute('class', 'img')

                let div3 = document.createElement("div")
                div3.setAttribute('class', 'desc')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'infoPalestrantes')

                let foto = document.createElement("img");
                foto.setAttribute('src', lista[i].foto)
                foto.setAttribute('class', '')

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora
                hora.setAttribute('class', '')

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                nome.setAttribute('class', '')
                div4.append(nome)

                if (!lista[i].titulo == "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    titulo.setAttribute('class', '')
                    div4.append(titulo)
                }

                div3.append(hora)
                div3.append(div4)

                div2.append(foto)

                div1.append(div2)
                div1.append(div3)

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
                "nome": "Guilherme",
                "titulo": "Vale do Silício:  Como uma pequena região mudou o mundo",
                "foto": "<?php echo URL ?>imgs/Guilherme.jpeg",
                "hora": "13h30"
            },
            2: {
                "nome": "Stefano",
                "titulo": "Como se destacar no início da carreira",
                "foto": "<?php echo URL ?>imgs/Stefano.jpeg",
                "hora": "14h15"
            },
            3: {
                "nome": "Grazielly Lopes Terres dos Santos e Vitoria Eduarda Schmidt Swaizer",
                "titulo": "Aplicação auxílio no combate a violência",
                "foto": "<?php echo URL ?>imgs/Grazielly&Vitoria.jpeg",
                "hora": "15h"
            },
            4: {
                "nome": "Ryan Wolf Gabriel Koch",
                "titulo": "Geogame",
                "foto": "<?php echo URL ?>imgs/RyanWolf.jpeg",
                "hora": "15h15"
            },
            5: {
                "nome": "Gabriel Bender",
                "titulo": "Carreira em design em produtos",
                "foto": "<?php echo URL ?>imgs/GabrielBender.jpeg",
                "hora": "15h50"
            },
            6: {
                "nome": "Italo Oliveira",
                "titulo": " Empreendedor vs programador: O perfil técnico dentro das empresas",
                "foto": "<?php echo URL ?>imgs/Italo.jpeg",
                "hora": "19h30"
            },
            7: {
                "nome": "Edson Scheffer",
                "titulo": "Como nasce um empreendedor no mundo do Gamer",
                "foto": "<?php echo URL ?>imgs/EdsonScheffer.jpg",
                "hora": "20h"
            },
            8: {
                "nome": "Leonardo Santiago",
                "titulo": "CrisduLabs: Como transformamos ideias em resultados!",
                "foto": "<?php echo URL ?>imgs/LeonardoSantiago.jpeg",
                "hora": "21h"
            }
        }

        for (let i = 1; i <= 8; i++) {
            if (!lista[i].nome == "") {
                let div1 = document.createElement("div")
                div1.setAttribute('class', 'bloco')

                let div2 = document.createElement("div")
                div2.setAttribute('class', 'img')

                let div3 = document.createElement("div")
                div3.setAttribute('class', 'desc')

                let div4 = document.createElement('div')
                div4.setAttribute('class', 'infoPalestrantes')

                let foto = document.createElement("img");
                foto.setAttribute('src', lista[i].foto)
                foto.setAttribute('class', '')

                let hora = document.createElement('h3')
                hora.innerHTML = lista[i].hora
                hora.setAttribute('class', '')

                let nome = document.createElement('h2')
                nome.innerHTML = lista[i].nome
                nome.setAttribute('class', '')
                div4.append(nome)

                if (!lista[i].titulo == "") {
                    let titulo = document.createElement('p')
                    titulo.innerHTML = lista[i].titulo
                    titulo.setAttribute('class', '')
                    div4.append(titulo)
                }

                div3.append(hora)
                div3.append(div4)

                div2.append(foto)

                div1.append(div2)
                div1.append(div3)

                main.append(div1)
            }
        }
    }

</script>
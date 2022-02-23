<style>
    header h1{
        display: none;
    }
    header #ornament{
        height: 130px;
        background-image: url(../RJutilidades/Assets/IMG/ornament-form.png);
        background-image:
            image-set(
                url(../RJutilidades/Assets/IMG/ornament-form.webp)  type("image/webp"),
                url(../RJutilidades/Assets/IMG/ornament-form.png) type("image/png")               
            );
    }

    @media all and (max-width: 620px){
        header #ornament {
            height: 100px;
        }
    }

    @media all and (max-width: 960px){
        .banner span{
            width: 480px;
        }
    }

    @media all and (max-width: 620px){
        .banner span{
            font-size: 26px;
            width: 380px;
        }
    }


    @media all and (max-width: 480px){
        .banner span{
            font-size: 19px;
            width: 300px;
        }
    }

    @media all and (max-width: 370px){
        .banner span{
            font-size: 18px;
            width: 280px;
        }
    }
</style>


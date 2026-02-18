# Configuración del VSC con Live Sass Compiler

1. Instalar la extensión Live Sass Compiler

2. Tener una estructura básica de "assets", donde dentro tenga una carpeta "scss".

3. En "Administrar", voy a "configuración"

![alt text](/README/image.png)

En la pantalla que me sale, escribo "json". Me saldrá un listado del que debo elegir la siguiente opción
![alt text](/README/image-1.png)

4. En el json vamos a incluir el siguiente código:

```bash

    "liveSassCompile.settings.formats":[    
        {
            "format": "expanded",
            "extensionName": ".css",
            "savePath": "~../css"
        },
        {
            "format": "compressed",
            "extensionName": ".min.css",
            "savePath": "~../css"
        }
    ],

```


## recursos HTML para reutilizar

### Artículo tipo 1 (HTML)

```html
<!-- Artículo 01 -->
<article class="art01">
    <img src="https://dummyimage.com/1000x700" alt="">
    <div>
        <h3>Lorem, ipsum dolor.</h3>
        <a href="" id="boton">CTA</a>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aliquam pariatur? Eius excepturi repellendus esse qui doloremque a similique sint.</p>
        <a href="" id="boton">CTA</a>
    </div>
</article>
```

### Artículo tipo 1 (SCSS)
```scss
@use 'config' as c;

.art01{    
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    row-gap: 2rem;
    @media only screen and (min-width:c.$tablet){
        &{
            row-gap: 3rem;
        }    
    }
    @media only screen and (min-width:c.$desktop){
        &{
            width: 80%;
            flex-direction: row;
            justify-content: center;
        }    
    }
    >img{
        width: 100%;
        max-height: 40dvh;
        object-fit: cover;
        object-position: center;
        @media only screen and (min-width:c.$tablet){
            &{
                max-height: 50dvh;  
            }     
        }
        @media only screen and (min-width:c.$desktop){
            &{
                width: 50%;
                max-height: initial          
            }    
        }
    }
    >div{
        width: 100%;
        padding: c.$padMin;        

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        row-gap: 1.5rem;
        @media only screen and (min-width:c.$tablet){
            &{
                width: 60%;                
                min-width: 700px;
                padding: c.$padMax;
            }    
        }
        @media only screen and (min-width:c.$desktop){
            &{
                width: 50%;
                min-width: initial;
                padding: c.$padMax 8rem;
            }    
        }
        h3{
            @media only screen and (min-width:c.$tablet){
                &{
                    width: 100%;
                    text-align: left;
                }    
            }
        }
    }
}
```



# Cabaleiro Poceiro, Iván
``` html
<!DOCTYPE html>
<html lang="gl">

<head>
    <meta charset="utf-8">
    <title>Exercicio posicionamento</title>
    <style>
        body {
            font-weight: bold;
            color: white;
        }

        #contenedor {
            width: 90%;
            margin: auto;
            padding: 10px;
            border: solid 1px black;
            background-color: #CCCCAA;
        }

        #contido1 {
            width: 400px;
            margin: 10px 30px;
            border: solid 1px black;
            background-color: #CCCCCC;
        }

        #contido2 {
            width: 450px;
            margin: 10px 30px;
            padding: 10px;
            border: solid 1px black;
            background-color: #CCAAAA;
        }

        #caixa11 {
            width: 70px;
            height: 70px;
            background-color: #FF0000;
            border: solid 1px black;
            margin: 10px;
        }

        #caixa12 {
            width: 90px;
            height: 90px;
            background-color: #00FF00;
            border: solid 1px black;
            margin: 10px;
        }

        #caixa13 {
            width: 110px;
            height: 110px;
            background-color: #0000FF;
            border: solid 1px black;
            margin: 10px;
            position: relative;
            bottom: 20px;
            right: 10px;
        }

        .caixa21 {
            width: 70px;
            height: 70px;
            background-color: #FF0000;
            border: solid 1px black;
            margin: 10px;
        }

        .caixa22 {
            width: 90px;
            height: 90px;
            background-color: #00FF00;
            border: solid 1px black;
            margin: 10px;
        }

        .caixa23 {
            width: 110px;
            height: 110px;
            background-color: #0000FF;
            border: solid 1px black;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div id="contenedor">
        <div id="contido1">
            <div id="caixa11"> Caixa 11 </div>
            <div id="caixa12"> Caixa 12 </div>
            <div id="caixa13"> Caixa 13 </div>
        </div>
        <div id="contido2">
            <div class="caixa21"> Caixa 21 </div>
            <div class="caixa22"> Caixa 22 </div>
            <div class="caixa23"> Caixa 23 </div>
        </div>
    </div>
</body>

</html>
```


# Exercicios de Posicionamento de Caixas en CSS


## **1. Que tipo de posicionamento teñen as caixas?**

`position:` static

## **2. Código para desprazar a caixa12 20px cara arriba e 10px cara a esquerda con posicionamento relativo:**

```css
#caixa12 {
  position: relative;
  top: -20px;
  left: -10px;
} 
```
## **3. ¿Móvense as demais caixas ao realizar o exercicio anterior? Por que?**

No porque es la relativa. Si fuera la absoluta se reajustarian ya que haria como si no ocupase el espacio anterior, sin embargo, este mantiene su posicion original como si fuera un elemento invisible.

## **4. Código para posicionar a caixa12 a 50px da parte superior e 30px da esquerda con posicionamento absoluto:**

```css
#caixa12 {
  position: absolute;
  top: 50px;
  left: 30px;
}
```

## **5. ¿Que sucede se se engade un posicionamento relativo a “contido1”?**

Nada, ya que se mantiene relativa al punto original

## **6. ¿Que sucede se “contido1” ten posicionamento estático e a caixa12 mantén o posicionamento absoluto?**

Aparentemente se sale de la caja contenido1

## **7. ¿Que sucede se “contido1” pasa a ter posicionamento absoluto e a caixa12 mantén o posicionamento absoluto?**

El contenido 2 se pone detras del 1 , y el 1 permanece en su posicion original, y su contenido sigue igual que antes, por lo tanto, caixa 12 sigue igual.

## **8. Código para posicionar a caixa21 fixamente a 100px da parte inferior e 60px da dereita:**

```css
.caixa21 {
  position: fixed;
  bottom: 100px;
  right: 60px;
}
```

## **9. Mantendo o posicionamento anterior, ¿modifícase a posición da caixa21 se “contido2” pasa a ser relativo?**

No, se sigue manteniendo en su posicion, ya que lo relativo del contenido 2 no afecta en la posición original

## **10. Que sucede con “contido1” se as caixas 11, 12 e 13 flotan cara á dereita? Explicación e solución.**

```css
#caixa11,
#caixa12,
#caixa13 {
  float: right;
}
```

Lo que pasa es que se convierten en elementos flotantes y por lo tanto no ocupan espacio dentro de contenido 1, por lo que queda de contenido es una linea que representa el borde de la caja y los elementos marcados como `float:right` se colocan de derecha a izquierda en vez de arriba a abajo.

## **11. Por que non se ven iguais contido1 e contido2 ao establecer un ancho de 300px?**

```css
#contido1,
#contido2 {
  width: 300px;
}
```

El contenido 2 tiene un `padding:10px` que hace que aparente mas grande. Lo forma de solventar este error sería eliminando ese padding o añadiendoselo al contenido 1. Asi aparentarian tener el mismo ancho.


## **12. Que sucede se “contido2” ten posicionamento absoluto?**

Se acuerda de su antigua posicion, y se mantiene ahi, pero no ocupa espacio, por lo que el padre se encoje y aparenta haber salido del contenedor.


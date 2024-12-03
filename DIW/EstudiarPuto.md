# Imagenes Conceptos

`pixels` = unidad de visualizacion mas pequeña de una imagen digital.

`Resolucion de imagen` = grado de detalle o calidad de una imagen digital. (ppp/ppi)

`Resolucion de un monitor` = numero de pixeles por pulgada capaz de mostrar

`Profundidad de color` = numero de bits necesarios para codificar y almacenar información de color de cada píxel de una imagen. **(+bits = +colores)**


### Modos de color

- **Monocromático**: 1 bit = blanco/negro

- **Escala de grises**: 256 tonos de grises

- **Color indexado**: 8 bit = 256 colores(2*)

- **RGB**: combinacion de 3 valores `(ROJO, VERDE, AZUL)` (0-255)

- **HSB**: combinacion de 3 valores `(Tono[0-360], Saturación[0%-100%], Brillo[0-100])` 


### Formatos



#### `BMP` (Bitmap)
- windows
- cuadricula de pixeles
- no pierde calidad
- guarda mucha info pero ocupa mucho

#### `GIF` (Graphics Interchange Format)
- especificamente diseñado para comprimir imagenes digitales
- paleta de 256 colores (8bits)
- no recomendada para fotos de cierta calidad o originales
- perfecto para publicar dibujos

#### `JPG-JPEG` (Join Photographic Experts Group)
- 16 millones de colores
- comun para publicar en la web
- Pierde calidad al comprimir `(REC:90%-60%)`
- Formato por defecto de camaras digitales
- Ideal su uso mientras estea bien configurada las dimensiones y la compresión.


#### `TIF-TIFF` (Tagged Image File Format)
- imagenes en excelente calidad
- profundidad de 1 a 32 bits
- Editar o imprimir ideal
- Archivos muy grandes


#### `PNG` (Portable Network Graphic)
- Alternativa de `GIF`
- tasa de compresion mas alta que GIF (+10%)
- Pierde calidad al comprimir `(REC:90%-60%)`
- 64 bits de profundidad = +256 colores
- No tiene perdida en la compresión


#### `SVG` (Scalable Vector Graphics)
- Escalable de manera **ilimitada** sin perdidas
- No compuesto por pixeles, si no de información matematica
- Ideal para gráficas, mapas e iconos
- Puedes animar cada elemento individualmente facilmente al usar matematicas en vez de pixeles
- Animable en el html por JavaScript y CSS 
- Es de **menor tamaño sus ficheros** que los de JPG o PNG


#### `WebP` (especifico para uso web)
- Combina las ventajas de JPG y PNG
- Compatible con la mayotia de navegadores
- Imagenes comprimidas **sin** perdida [26% mas pequeño que PNG]
- Imagenes comprimidas **con** perdida [25-34% mas pequeño que JPEG]
- tienen soporte para transparencias
- Con perdidas y transparencia aumenta su tamaño un 22%


### Optimización WEB

- Imagenes lo menos pesadas posibles
- El tamaño de los archivos graficos son determinados por su dimension, su resolucion, el numero de colores y el formato (JPG, GIF, PNG)
- Imagenes no superiores a `72ppp para webs`, pensando en la mas usada en los ordenadores
-Para **imprimir** se recomienda entre `200-300ppp`
- Se recomienda editar la imagen con un editor para cumplir con las caracteristicas anteriormente dichas.
- Guardar imagenes favoritas en formato BMP, TIFF o JPG sin comprimir, asi creando a partir de ellos copias en formatos PNG, JPG o WebP
- `GIF` para dibujos, graficos y logotipos
- `JPG` para fotos e imagenes con degradados
- No insertar las imagenes con `Ctrl+C` y `Ctrl+V`
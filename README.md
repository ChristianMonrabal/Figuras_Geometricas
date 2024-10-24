# PJ Síntesi - Actividad 8: Figuras geométricas

## Objetivo
El objetivo de esta actividad es aplicar los conceptos de programación orientada a objetos con PHP para crear clases, interfaces y las relaciones entre ellas. Las clases contendrán la funcionalidad para realizar cálculos de áreas y perímetros de diferentes figuras geométricas.

## Figuras Geométricas
Las figuras geométricas consideradas en este ejercicio son:
- Triángulo
- Rectángulo
- Cuadrado
- Círculo

## Descripción de la actividad

### Página Principal
- Crear una página principal que, mediante un formulario, solicite al usuario que elija el tipo de figura geométrica.
- Al hacer clic en el botón, se redirigirá a otra página que solicitará al usuario introducir uno o dos lados, dependiendo de la figura seleccionada.
- Una vez introducidos los lados, el programa calculará el área y el perímetro de la figura.
- La salida en pantalla mostrará: el tipo de figura, los lados introducidos y el resultado del área y el perímetro.

### Conservación de datos mediante sesiones
- Utilizar sesiones PHP para conservar los datos introducidos en el formulario.
- Cuando el usuario introduzca los datos (tipo de figura y lados), estos se guardarán en variables de sesión.
- En la página de resultados, se recuperarán los datos de la sesión para mostrar los lados introducidos y los cálculos de área y perímetro.
- Si el usuario vuelve al formulario para modificar los datos, estos deben cargarse automáticamente en los campos del formulario desde la sesión.

### Clases
#### Clase `FiguraGeometrica`
- Atributos: `tipoFigura` y `lado1`.
- Métodos: 
  - Getters y setters para los atributos.
  - Constructor y destructor.
  - Método `calcularArea()` (sin funcionalidad concreta, puede mostrar un mensaje indicando que debe ser sobreescrito).
  
#### Clase `Triangulo`
- Hereda de `FiguraGeometrica`.
- Atributos: `lado2` y `lado3`.
- Métodos:
  - Getters y setters para los atributos.
  - Constructor y destructor.
  - Método `calcularArea()` para calcular el área del triángulo.
  - Método `calcularPerimetro()` para calcular el perímetro del triángulo.
  - Método mágico `__toString()` para devolver la descripción de la figura.

#### Clase `Rectangulo`
- Hereda de `FiguraGeometrica`.
- Atributos: `lado2`.
- Métodos:
  - Getters y setters para los atributos.
  - Constructor y destructor.
  - Método `calcularArea()` para calcular el área del rectángulo.
  - Método `calcularPerimetro()` para calcular el perímetro del rectángulo.
  - Método mágico `__toString()` para devolver la descripción de la figura.

#### Clase `Cuadrado`
- Hereda de `FiguraGeometrica`.
- Métodos:
  - Constructor y destructor.
  - Método `calcularArea()` para calcular el área del cuadrado.
  - Método `calcularPerimetro()` para calcular el perímetro del cuadrado.
  - Método mágico `__toString()` para devolver la descripción de la figura.

#### Clase `Circulo`
- Hereda de `FiguraGeometrica`.
- Métodos:
  - Constructor y destructor.
  - Método `calcularArea()` para calcular el área del círculo.
  - Método `calcularPerimetro()` para calcular el perímetro del círculo.
  - Método mágico `__toString()` para devolver la descripción de la figura.

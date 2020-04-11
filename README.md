<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


## Protección de una API con Login


EL CONTROLADOR EXISTEN 5 METODOS

## test_store

## test_show

## test_update

## test_delete

## test_index

Pero existe el de validación, y el de seguridad autenticación:

## test_validate_title

FFFFFFF.   ESTO SIGNIFICA CUANDO TODOS LOS METODOS FALLAN PERO EL UTLIMO FUNCIONA QUE ES EL PUNTO, cuando se agrega el Nuevo metodo de 

autenticar Usuario y no sea publico

## test_guest

$this->json('GET', '/api/posts')->assertStatus(401);//esto es cuando un api es public

Un ejemplo cuando se agrega cuando es privado
 
$this->actingAs($user, 'api')->json('POST', '/api/posts', [ 'title' => 'El post de prueba']);

## Comandos de laravel usados

## php artisan make:test UserTest 
dentro de test, se crea en el apartado de funcional
## php artisan make:test UserTest --unit
con este codigo creamos en la carpeta test, es para probar y no trabajar con la carpeta produccion, hace las misma funciones.

vendor/bin/phpunit este comando es para ver los test que están funcionando, confirmaciones

## php artisan make:test Http/Controllers/Api/PostControllerTest 
este es el mismo código de test pero esta ves se coloco la ruta para ser mas verídico donde are la prueba 


## php artisan make:controller Api/PostController --api --model=Post 
este comando ya es usado pero esta ves para crear el controlador le digo que quiero que sea dentro de una carptea Api, que sea de tipo recurso --api y que se conecte con el modelo que ya se habia creado –model=Post

## vendor/bin/phpunit --filter test_update 
 este es para filtrar un único test, es cuando hay varias pruebas, pero quiero solo consultar el test de update

## notas

Respuesta (200): es ok

Respuesta (404):ruta no existe, o el post no existe

Respuesta (422):estatus HTT es donde fue imposible completarlo, por que se valida que no se ponga un titulo vacío

Respuesta (500):se esta enviando la información, pero algo esta haciendo en el código, que no funcione, y es que no se a creado en request en desarrollo en este caso, puede ser otro

Respuesta (204):SIN CONTENDIO

Respuesta a:Metodología TDD y testing HTTP

Paso 1: Crear prueba, para obtener rojo

Paso 2: Crear código para cumplir con esa prueba, para obtener verde

Paso 3: Refactorización es una revisión posterior de revisar, organizar, crear métodos, para seguir consiguiendo verde sin alterar la prueba.









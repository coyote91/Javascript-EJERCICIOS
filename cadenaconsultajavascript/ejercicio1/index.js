function httpBuildQuery(params) 
{
    return Object.entries(params).map(([key, value]) => `${encodeURIComponent(key)}=${encodeURIComponent(value)}`).join('&');
}
    
    let params = {
                    var1: 'valor1',
                    var2: 'valor2',
                    var3: 'valor3'
                };
    
    let queryString = httpBuildQuery(params);
    
    console.log(queryString); // "var1=valor1&var2=valor2&var3=valor3"



    /*
    `http_build_query()` es una función de PHP que genera una cadena de consulta a partir de un arreglo asociativo 
    o de un objeto. En JavaScript, no existe una función nativa equivalente a `http_build_query()`, 
    pero puedes lograr un resultado similar utilizando la función `Object.entries()` 
    junto con `Array.prototype.map()` y `Array.prototype.join()`.
    Aquí tienes un ejemplo de cómo crear una función en JavaScript que imita el comportamiento de `http_build_query()`:

    En este ejemplo, definimos una función `httpBuildQuery()` que toma como argumento un objeto con los parámetros a enviar. 
    La función utiliza `Object.entries()` para obtener un arreglo de pares clave-valor del objeto, 
    luego utiliza `Array.prototype.map()` para generar un arreglo de cadenas con cada par clave-valor codificado 
    utilizando `encodeURIComponent()`, y finalmente utiliza `Array.prototype.join()` para unir las cadenas 
    en una sola cadena de consulta.

    En resumen, aunque JavaScript no tiene una función nativa equivalente a `http_build_query()`, 
    puedes lograr un resultado similar utilizando las funciones `Object.entries()`, `Array.prototype.map()` 
    y `Array.prototype.join()`. 
    
    
    */
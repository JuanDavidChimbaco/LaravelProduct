var id = 0;
function create() {
    axios.post('/producto', {
        nombre: txtNombre.value,
        cantidad: txtCantidad.value,
    })
        .then(function (response) {
            console.log(response);
            read()
        })
        .catch(function (error) {
            errores(error)
            console.log(error);
        })
}

function read(url = "/producto") {
    let data = "";
    let pagination = "" ;
    axios.get(url)
        .then(function (response) {
            // console.log(response.data);

            response.data.data.forEach((p, index) => {
                data += `<tr>
                            <th scope="row">${index+1}</th>
                            <td>${p.nombre}</td>
                            <td>${p.cantidad}</td>
                            <td>${p.estado}</td>
                            <td colspan="2">
                                <input type="radio" name="checkOpcion" id="checkOpcion" onclick='load(${JSON.stringify(p)})'>
                                &nbsp; &nbsp;
                                <a href="" onclick='deleted(${p.id})' class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>`
            })


            response.data.links.forEach((elements) => {
                pagination +=  `<td>
                                    <a onclick="read('${elements.url}')" class="btn btn-outline-secondary"><p><small>${elements.label}</small></p></a>
                                </td>`;
            });
            pages.innerHTML = pagination;
            table.innerHTML = data;
        })
        .catch(function (error) {
            console.log(error);
        })
}

function load(element) {
    console.log(element);
    this.id = element.id;
    txtNombre.value = element.nombre;
    txtCantidad.value = element.cantidad;
}

function update() {
    axios.put(`producto/${this.id}`,{
        id: this.id,
        nombre:txtNombre.value,
        cantidad:txtCantidad.value,
    })
    .then(function(response){
        console.log(response);
        read()
    })
    .catch(function(error){
        console.log(error);
    })
}


function deletes(){
    let rest = confirm("Seguro de eliminar el Producto? ")
    if (rest){
        axios.delete(`producto/${this.id}`)
        .then(function(response){
            console.log(response);
            read()
        })
        .catch(function(error){
            console.log(error);
        })
    }
}

function deleted(idD){
    let rest = confirm("Seguro de eliminar el Producto? ")
    if (rest){
        axios.delete(`producto/${idD}`)
        .then(function(response){
            console.log(response);
            read()
        })
        .catch(function(error){
            console.log(error);
        })
    }
}

function clean(){
    txtNombre.value = '';
    txtCantidad.value = '';
    checkOpcion.checked = false;
}

function errores(error){
    console.log(error.response.data.errors);
    let e = ''
    // Object.values(error.response.data.errors).forEach((value)=>{
    //     e += value + '<br>'
    // })
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salio mal!',
        html: `<b>Por favor verifica los datos</b> <hr><br>${error.message}<br><p><small style="font-size: 1rem;">${e}</small></p>`,
        })
}


read()

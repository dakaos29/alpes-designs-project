
const formulario = document.getElementById('formulario')
const nombre = document.getElementById('validationCustom01')
const apellido = document.getElementById('validationCustom02')
const email = document.getElementById('validationCustomEmail')
const password = document.getElementById('validationCustomPassword')
const telefono = document.getElementById('validationCustom03')
const ciudad = document.getElementById('validationCustom04')
const estado = document.getElementById('validationCustom05')
const zip = document.getElementById('validationCustom06')
const checkbox = document.getElementById('invalidCheck')
const boton = document.getElementById('boton')

formulario.addEventListener('submit', (e) => {
    e.preventDefault()
    e.stopPropagation()

    const data = new FormData (formulario)

     if (!data.get ('nombre').trim()){
        console.log('campo nombre vacio')
        campoError(nombre)
        return
    } else {
        campoValido(nombre)
    }

    if (!data.get ('apellido').trim()){
        console.log('campo apellido vacio')
        campoError(apellido)
        return
    }else {
        campoValido(apellido)
    }

    if (!data.get ('email').trim()){
        console.log('campo correo vacio')
        campoError(email)
        return
    }else {
        campoValido(email)
    }

    if (!data.get ('password').trim()){
        console.log('campo contraseña vacio')
        campoError(password)
        return
    }else {
        campoValido(password)
    }

    if (!data.get ('telefono').trim()){
        console.log('campo telefono vacio')
        campoError(telefono)
        return
    }else {
        campoValido(telefono)
    }

    if (!data.get ('ciudad').trim()){
        console.log('campo ciudad vacio')
        campoError(ciudad)
        return
    }else {
        campoValido(ciudad)
    }

    if (!data.get ('estado').trim()){
        console.log('campo estado vacio')
        campoError(estado)
        return
    }else {
        campoValido(estado)
    }


    if (!data.get ('zip').trim()){
        console.log('campo zip vacio')
        campoError(zip)
        return
    }else {
        campoValido(zip)
    }

    console.log('campos completados')
    limpiarFormulario()

    
})

const campoError = (campo) => {
    campo.classList.add('is-invalid')
    campo.classList.remove('is-valid')
}

const campoValido = (campo) => {
    campo.classList.remove('is-invalid')
    campo.classList.add('is-valid')
}

const limpiarFormulario = () => {
    console.log('mensaje enviado con exito')
    formulario.reset()
    nombre.classList.remove('is-valid')
    apellido.classList.remove('is-valid')
    email.classList.remove('is-valid')
    password.classList.remove('is-valid')
    telefono.classList.remove('is-valid')
    ciudad.classList.remove('is-valid')
    estado.classList.remove('is-valid')
    zip.classList.remove('is-valid')
}
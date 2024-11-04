import React from 'react'
import { Routes, Route } from 'react-router-dom'
import Inicio from '../pages/Inicio/Inicio'
import Clientes from '../pages/Clientes/Clientes'
import Proveedores from '../pages/Proveedores/Proveedores'
import Itinerarios from '../pages/Itinerarios/Itinerarios'
import Pagos from '../pages/Pagos/Pagos'
import Reservas from '../pages/Reservas/Reservas'
import Soporte from '../pages/Soporte/Soporte'
import Login from '../pages/Login/Login'
import Register from '../pages/Register/Register'
import Error from '../pages/Error/Error'




const Routers = () => {

  return (
    <div>

      <Routes>
        <Route path='/' element={<Inicio/>}></Route>
        <Route path='/inicio' element={<Inicio/>}></Route>
        <Route path='/clientes' element={<Clientes/>}></Route>
        <Route path='/proveedores' element={<Proveedores/>}></Route>
        <Route path='/itinerarios' element={<Itinerarios/>}></Route>
        <Route path='/pagos' element={<Pagos/>}></Route>
        <Route path='/reservas' element={<Reservas/>}></Route>
        <Route path='/soporte' element={<Soporte/>}></Route>
        <Route path='/login' element={<Login/>}></Route>
        <Route path='/register' element={<Register/>}></Route>
        <Route path='*' element={<Error/>}></Route>
      </Routes>
    </div>
  )
}

export default Routers

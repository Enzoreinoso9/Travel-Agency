import React from 'react'
import './Clientes.css'
import { Link } from 'react-router-dom'

const Clientes = () => {
  return (
    <div>
   {/* Breadcrumbs*/}
  <div className="breadcrumbs text-sm p-4  w-full">
  <ul className="flex space-x-2 tex text-green-950">
    <li><Link to="/inicio" className="hover:underline" >Inicio</Link></li>
    <li>Clientes</li>
  </ul>
</div>

    </div>
  )
}

export default Clientes
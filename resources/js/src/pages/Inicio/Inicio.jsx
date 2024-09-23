import React from 'react'
import logo from '../../assets/logo.png'
import { Link } from 'react-router-dom'
import { FaArchive, FaBell, FaBusAlt, FaPoll } from 'react-icons/fa'

const Inicio = () => {
  return (
    <div>
  {/* Breadcrumbs*/}
  <div className="breadcrumbs text-sm p-4  w-full">
  <ul className="flex space-x-2 text-green-950">
    <li>Inicio</li>
  </ul>
</div>

<div className="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-8">
  {/* Logo */}
  <h1 className="mb-8">
    <img src={logo} alt="Logo" className="w-60 h-60 mx-auto" />
  </h1>

  {/* Contenedor de paneles de control más ancho */}
  <div className="grid grid-cols-2 gap-8 w-full max-w-5xl">
    
    {/* Paneles de control */}
    <Link to="/notificaciones">
    <div className="h-60 w-full flex items-center justify-center text-center bg-gray-300 shadow-lg rounded-lg">
      <h1 className="text-2xl font-bold text-green-900 flex flex-col items-center"><FaBell className=' text-4xl mb-2'></FaBell> <span>Alertas y</span><span> Notificaciones</span></h1>
    </div>
    </Link>

    <Link to="/paquetes">
    <div className="h-60 w-full flex items-center justify-center text-center bg-green-950 shadow-lg rounded-lg">
      <h1 className="text-2xl font-bold text-white flex flex-col items-center"><FaArchive className='text-4xl mb-2'></FaArchive><span> Paquetes de</span><span> Viajes</span></h1>
    </div>
    </Link>

<Link to="/reservas">
    <div className="h-60 w-full flex items-center justify-center text-center bg-green-950 shadow-lg rounded-lg">
      <h1 className="text-2xl font-bold text-white flex flex-col items-center "><FaBusAlt className='text-4xl mb-2'></FaBusAlt> <span>Transportes</span><span>de Viajes</span></h1>
    </div>
</Link>

<Link to="estadisticas">
    <div className="h-60 w-full flex items-center justify-center text-center bg-gray-300 shadow-lg rounded-lg">
      <h1 className="text-2xl font-bold text-green-900 flex flex-col items-center"><FaPoll className='text-4xl mb-2'></FaPoll> <span>Estadísticas</span><span>Rápidas</span></h1>
    </div>
</Link>

  </div>
</div>
</div>

  )}

export default Inicio

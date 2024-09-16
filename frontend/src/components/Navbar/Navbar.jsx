import React from 'react'
import { Link } from 'react-router-dom'

const Navbar = () => {
  return (
    
    <div className="navbar bg-green-900">
  <div className="flex-1">
     <Link to="/inicio" className="btn btn-ghost text-xl">daisyUI</Link>
  </div>
  <div className="flex-none">
    <ul className="menu menu-horizontal px-1">
      <li>
        <details>
          <summary>Perfil</summary>
          <ul className="bg-gray-300 rounded-t-none p-2">
            <li><a>Editar</a></li>
            <li><a>Salir</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>
  )
}

export default Navbar

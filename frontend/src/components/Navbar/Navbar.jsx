import React from 'react'
import { FaUserCircle } from 'react-icons/fa'
import { Link } from 'react-router-dom'



const Navbar = () => {
  return (
   
<div className="navbar bg-gray-300">
  <div className="flex-1">
  
  </div>
  <div className="flex-none">
    <ul className="menu menu-horizontal px-1">
      <li>
        <details>
          <summary className="text-black">Admin <FaUserCircle></FaUserCircle> </summary>
          <ul className="text-black bg-gray-300 rounded-t-none p-2">
            <li><Link>Editar</Link></li>
            <li><Link>Salir</Link></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>
  )
}

export default Navbar

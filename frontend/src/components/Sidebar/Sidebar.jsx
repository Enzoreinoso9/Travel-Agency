import { Link } from "react-router-dom";
import { FaArchive, FaBusAlt, FaDollyFlatbed, FaPoll, FaRegCalendarAlt, FaUsers } from "react-icons/fa";
import logo from '../../assets/logo.png'

const Sidebar = ({}) => {
  return (
    
<div className='w-54 bg-green-950 fixed h-full px-4 py-2'>
  <div className='my-2 mb-4'>
    <Link to="/inicio"><img src={logo} className='w-12 block mx-auto'/></Link>
  </div>
  <hr />
  <ul className='mt-3 text-white font-bold'>
    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to='/clientes' className="px-3">
        <FaUsers className='inline-block w-6 h-6 mr-2 -mt-2'></FaUsers> Clientes
      </Link>
    </li>

   
    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to="/proveedores" className="px-3">
        <FaDollyFlatbed className='inline-block w-6 h-6 mr-2 -mt-2'></FaDollyFlatbed> Proveedores
      </Link>
    </li>

    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to="/paquetes" className="px-3">
        <FaArchive className='inline-block w-6 h-6 mr-2 -mt-2'></FaArchive> Paquetes
      </Link>
    </li>


    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to="/viajes" className="px-3">
        <FaBusAlt className='inline-block w-6 h-6 mr-2 -mt-2'></FaBusAlt> Viajes
      </Link>
    </li>

    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to="/estadisticas" className="px-3">
        <FaPoll className='inline-block w-6 h-6 mr-2 -mt-2'></FaPoll> Estadisticas
      </Link>
    </li>

    <li className='mb-2 rounded hover:shadow hover:bg-green-500 py-2'>
      <Link to="/itinerarios" className="px-3">
        <FaRegCalendarAlt className='inline-block w-6 h-6 mr-2 -mt-2'></FaRegCalendarAlt> Itinerario
      </Link>
    </li>
  </ul>
</div>
  );
};

export default Sidebar;

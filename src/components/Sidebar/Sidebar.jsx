import { Link } from "react-router-dom";

const Sidebar = () => {
  return (
    <div className="bg-green-900 h-screen w-60 fixed top-0 left-0 flex flex-col">
      <div className="text-white text-2xl font-bold p-4">Menú</div>
      <nav className="flex-1">
        <ul className="space-y-4 text-white">
          <li>
            <Link
              to="/clientes"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Clientes
            </Link>
          </li>
          <li>
            <Link
              to="/proveedores"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Proveedores
            </Link>
          </li>
          <li>
            <Link
              to="/pagos"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Pagos
            </Link>
          </li>
          <li>
            <Link
              to="/reservas"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Reservas
            </Link>
          </li>
          <li>
            <Link
              to="/itinerarios"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Itinerarios
            </Link>
          </li>
          <li>
            <Link
              to="/soporte"
              className="block px-4 py-2 hover:bg-green-700 transition-colors"
            >
              Soporte
            </Link>
          </li>
        </ul>
      </nav>
    </div>
  );
};

export default Sidebar;

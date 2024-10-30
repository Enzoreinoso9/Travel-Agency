import React, {useState} from 'react'
import { BrowserRouter as Router, useLocation } from 'react-router-dom'
import Routers from './routes/Routers'
import Dashboard from './components/Dashboard/Dashboard'
import Sidebar from './components/Sidebar/Sidebar'
import './App.css'


const AppContent = () => {


//Ocultar Navbar
 const location = useLocation();

const hideComponents = ['/login', '/register', '/error'];

const shoulHideComponents = hideComponents.includes(location.pathname);

const contentClass = shoulHideComponents ? "content" : "content ml-80 mr-40 mt-20";


  return (
<div>

    <div className=" app-container">
    {!shoulHideComponents && <Sidebar/>}
    {!shoulHideComponents && <Dashboard/>}
      <div className={contentClass}>
        
      <Routers/>
      </div>
    </div>
</div>
  )
}



const App = () => {

  return (
    <Router>
          <AppContent/>
    </Router>
  )
}

export default App

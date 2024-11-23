import React from 'react'
import { BrowserRouter as Router, useLocation } from 'react-router-dom'
import Routers from './routes/Routers'
import Navbar from './components/Navbar/Navbar'
import Sidebar from './components/Sidebar/Sidebar'
import './App.css'


const AppContent = () => {

 const location = useLocation();

const hideComponents = ['/login', '/register', '/error'];

const shoulHideComponents = hideComponents.includes(location.pathname);

  return (
    <div className="app-container">
    {!shoulHideComponents && <Navbar/>}
    {!shoulHideComponents && <Sidebar/>}
      <div className="content">
      <Routers/>
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

import React from 'react';
import logo from './logo.svg';
import './App.css';
import Sidebar from './components/SideBarComponent';
import View from './components/ViewComponent';

function App() {
  return (
    <div className="App">
      <Sidebar />
      <View />
    </div>
  );
}

export default App;

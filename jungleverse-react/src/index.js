import "bootstrap/dist/css/bootstrap.min.css";
import React from "react";
import ReactDOM from "react-dom";
import "./index.css";
import Routes from "./routes";

ReactDOM.render(
  <React.StrictMode>
    <Routes></Routes>
  </React.StrictMode>,
  document.getElementById("root")
);

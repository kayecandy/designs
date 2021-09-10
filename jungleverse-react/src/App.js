import "./App.css";
import Header from "./components/header/Header";
import Menu from "./components/menu/Menu";
import MintBar from "./components/mint-bar/MintBar";
import SectionMint from "./components/section-mint/SectionMint";

function App() {
  return (
    <div className="jungleverse-container">
      <Menu></Menu>
      <Header></Header>
      <SectionMint></SectionMint>
      <MintBar></MintBar>
    </div>
  );
}

export default App;

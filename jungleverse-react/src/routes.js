import { BrowserRouter, Switch, Route, useLocation } from "react-router-dom";
import IndexPage from "./pages";
import IndexPageV2 from "./pages/v2";

export default function Routes() {
  return (
    <BrowserRouter>
      <Switch>
        <Route exact path="/">
          <IndexPage></IndexPage>
        </Route>
        <Route path="/v2">
          <IndexPageV2></IndexPageV2>
        </Route>
      </Switch>
    </BrowserRouter>
  );
}

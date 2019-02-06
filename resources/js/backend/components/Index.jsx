import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

import Login from './Login';
import Home from './Home';

export default class Index extends Component {
    render() {
        return (
            <div className="container">
                <Router>
                    <Switch>
                        <Route exact path="/backend" component={Home} />
                        <Route path="/backend/login" component={Login} onEnter={()=>{document.title = "Login"}} />
                    </Switch>
                </Router>
            </div>
        );
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
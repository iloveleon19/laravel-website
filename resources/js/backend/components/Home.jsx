import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

import NewPost from './NewPost';
import ManagePost from './ManagePost';
import SetPassword from './SetPassword';

export default class Home extends Component {
    componentDidMount() {
        document.title = "Backend Home";
    }

    constructor(props) {
        super(props);
        this.handleLogout = this.handleLogout.bind(this);
    }

    handleLogout(e) {
        axios.post('/backend/logout', this.state).then(response => {
            if (response.status===200) {
                window.location.reload();
            }
        }).catch(error => {
                console.log(error);
        });
    }

    render() {
        return (
            <Router>
                <div className="container">
                    <nav className="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                        <a className="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
                        <ul className="navbar-nav px-3">
                            <li className="nav-item text-nowrap">
                                <a className="nav-link" href="/backend/login" onClick={this.handleLogout}>Sign out</a>
                            </li>
                        </ul>
                    </nav>

                    <div className="container-fluid">
                        <div className="row">
                            <nav className="col-md-2 d-none d-md-block bg-light sidebar">
                                <div className="sidebar-sticky">
                                <ul className="nav flex-column">
                                    <li className="nav-item">
                                        <a className="nav-link dropdown-toggle" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Posts</a>
                                        <div className="collapse list-unstyled" id="pageSubmenu">
                                            <Link className="dropdown-item" to="/backend/new_post">New Posts</Link>
                                            <Link className="dropdown-item" to="/backend/manage_post">Manage Posts</Link>
                                        </div>
                                    </li>
                                    <li className="nav-item">
                                        <Link className="nav-link" to="/backend/set_pwd">Set Password</Link>
                                    </li>
                                </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <Switch>
                        <Route path="/backend/new_post" component={NewPost}/>
                        <Route path="/backend/manage_post" component={ManagePost}/>
                        <Route path="/backend/set_pwd" component={SetPassword}/>
                    </Switch>
                </div>
            </Router>
        );
    }
}

import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class Login extends Component {
    componentDidMount() {
        document.title = "login"
      }
    render() {
        return (
            <div className="container">
                <form className="form-signin">
                    <div className="text-center mb-4">
                        <img className="mb-4" src="../back/svg/bootstrap-solid.svg" alt="" width="72" height="72" />
                    </div>

                    <div className="form-group">
                        <label htmlFor="inputEmail" className="sr-only">Email address</label>
                        <input type="email" id="inputEmail" className="form-control" placeholder="Email address" required="" autoFocus />
                    </div>

                    <div className="form-group">
                        <label htmlFor="inputPassword" className="sr-only">Password</label>
                        <input type="password" id="inputPassword" className="form-control" placeholder="Password" required="" />
                    </div>

                    <div className="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" /> Remember me
                        </label>
                    </div>

                    <button className="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                    <p className="mt-5 mb-3 text-muted text-center">iloveleon© 2018-2019</p>
                </form>
            </div>
        );
    }
}

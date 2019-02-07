import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class Login extends Component {
    componentDidMount() {
        document.title = "login"
    }

    constructor() {
        super();
        this.state = {
            email: '',
            password: ''
        }
    }

    handleEmailChange(e) {
        this.setState({
            email: e.target.value
        })
    }

    handlePasswordChange(e) {
        this.setState({
            password: e.target.value
        })
    }

    handleSubmit(e) {
        e.preventDefault();
        axios.post('/backend/login', this.state).then(response => {
            if (response.status===200) {
                this.props.history.push('/backend');
            }
        }).catch(error => {
                console.log(error);
        })
    }

    render() {
        return (
            <div className="container">
                <form className="form-signin" onSubmit={this.handleSubmit} onSubmit={this.handleSubmit.bind(this)}>
                    <div className="text-center mb-4">
                        <img className="mb-4" src="../back/svg/bootstrap-solid.svg" alt="" width="72" height="72" />
                    </div>

                    <div className="form-group">
                        <label htmlFor="inputEmail" className="sr-only">Email address</label>
                        <input 
                            type="email"
                            className="form-control"
                            name="email"
                            placeholder="Email address"
                            onChange={this.handleEmailChange.bind(this)}
                            value={this.state.email}
                            autoFocus
                            required=""
                        />
                    </div>

                    <div className="form-group">
                        <label htmlFor="inputPassword" className="sr-only">Password</label>
                        <input 
                            type="password"
                            className="form-control"
                            name="password"
                            placeholder="Password"
                            onChange={this.handlePasswordChange.bind(this)}
                            value={this.state.password}
                            required=""
                        />
                    </div>

                    <div className="checkbox mb-3">
                        <label htmlFor="remember">
                            <input type="checkbox" name="remember" value="remember-me" /> Remember me
                        </label>
                    </div>

                    <button className="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                    <p className="mt-5 mb-3 text-muted text-center">iloveleon© 2018-2019</p>
                </form>
            </div>
        );
    }
}

import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class Login extends Component {
    componentDidMount() {
        document.title = "login";
    }

    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: '',
            remember: ''
        }
        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this)
    }

    handleInputChange(event) {
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value;
        const name = target.name;
    
        this.setState({
            [name]: value
        });
    }

    handleSubmit(event) {
        event.preventDefault();
        axios.post('/backend/login', this.state).then(response => {
            if (response.status===200) {
                this.props.history.push('/backend');
            } else {
                alert('login failed');
            }
        }).catch(error => {
                console.log(error);
        });
    }

    render() {
        return (
            <div className="container">
                <form className="form-signin" onSubmit={this.handleSubmit}>
                    <div className="text-center mb-4">
                        <img className="mb-4" src="../back/svg/bootstrap-solid.svg" alt="" width="72" height="72" />
                    </div>

                    <div className="form-group">
                        <label htmlFor="email" className="sr-only">Email address</label>
                        <input 
                            type="email"
                            className="form-control"
                            id="email"
                            name="email"
                            placeholder="Email address"
                            onChange={this.handleInputChange}
                            value={this.state.email}
                            autoFocus
                            required={true}
                        />
                    </div>

                    <div className="form-group">
                        <label htmlFor="password" className="sr-only">Password</label>
                        <input 
                            type="password"
                            className="form-control"
                            id="password"
                            name="password"
                            placeholder="Password"
                            onChange={this.handleInputChange}
                            value={this.state.password}
                            required={true}
                        />
                    </div>

                    <div className="checkbox mb-3">
                        <label htmlFor="remember">
                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                onChange={this.handleInputChange}
                                value={this.state.remember} /> Remember me
                        </label>
                    </div>

                    <button className="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

                    <p className="mt-5 mb-3 text-muted text-center">iloveleon© 2018-2019</p>
                </form>
            </div>
        );
    }
}

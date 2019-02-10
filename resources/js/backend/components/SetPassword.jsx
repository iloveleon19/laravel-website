import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';

export default class SetPassword extends Component {
    componentDidMount() {
        document.title = "set password";
    }

    constructor(props) {
        super(props);
        this.state = {
            oldPassword: '',
            newPassword: '',
            confirmPassword: ''
        }
        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleInputChange(event) {
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value;
        const name = target.name;
    
        this.setState({
          [name]: value
        });
    }

    handleSubmit(e) {
        e.preventDefault();

        if (this.state.newPassword === this.state.confirmPassword) {
            axios.post('/backend/set_pwd', this.state).then(response => {
                if (response.status===200) {
                    alert('sucessed !!');
                    window.location.reload();
                } else if (response.status===204) {
                    alert('old password not mach !!');
                }
            }).catch(error => {
                    console.log(error);
            });
        } else {
            alert('New password not match confirm password');
        }
    }

    render() {
        return (
            <div className="container">
                <main role="main" className="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h2>set password</h2>
                    <form onSubmit={this.handleSubmit}>

                        <div className="form-group">
                            <label htmlFor="oldPassword">Old Password</label>
                            <input 
                                type="password"
                                className="form-control"
                                id="oldPassword"
                                name="oldPassword"
                                onChange={this.handleInputChange}
                                value={this.state.oldPassword}
                                required={true}
                            />
                        </div>

                        <div className="form-group">
                            <label htmlFor="newPassword">New Password</label>
                            <input 
                                type="password"
                                className="form-control"
                                id="newPassword"
                                name="newPassword"
                                onChange={this.handleInputChange}
                                value={this.state.newPassword}
                                required={true}
                            />
                        </div>

                        <div className="form-group">
                            <label htmlFor="confirmPassword">Confirm Password</label>
                            <input 
                                type="password"
                                className="form-control"
                                id="confirmPassword"
                                name="confirmPassword"
                                onChange={this.handleInputChange}
                                value={this.state.confirmPassword}
                                required={true}
                            />
                        </div>

                        <button className="btn btn-primary" type="submit">Update</button>
                    </form>
                </main>
            </div>
        );
    }
}

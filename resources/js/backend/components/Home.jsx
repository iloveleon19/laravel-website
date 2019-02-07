import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch, Link } from 'react-router-dom';


export default class Home extends Component {
    componentDidMount() {
        document.title = "Backend Home"
    }

    handleLogout(e) {
        axios.post('/backend/logout', this.state).then(response => {
            console.log(response);
            if (response.status===200) {
                this.props.history.push('/backend/login');
            }
        }).catch(error => {
                console.log(error);
        })
    }

    render() {
        return (
            <div className="container">
                <p>Backend Homepage</p>
                <button onClick={this.handleLogout.bind(this)}>logout</button>
                {this.props.children}
            </div>
        );
    }
}

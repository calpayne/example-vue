import ExampleComponent from './components/ExampleComponent'

AeroComponents.extend((Vue) => {
    //Vue.config.devtools = true
    Vue.component('example-component', ExampleComponent)
})

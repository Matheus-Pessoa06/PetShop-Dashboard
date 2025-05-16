const Textarea = (props) =>{
    return(
        <input
            name={props.name}
            value={props.value}
            type={props.type}
            placeholder={props.placeholder}
        />
    )
    
}


export default Textarea;
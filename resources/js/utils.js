import {useWindowSize} from '@vueuse/core'

export function isDesktop(){
    const {width,height} = useWindowSize()

    return width.value > 768?true:false 

}
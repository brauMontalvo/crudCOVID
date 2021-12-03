import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AgregarUsuarioComponent } from './componentes/agregar-usuario/agregar-usuario.component';
import { EditarUsuarioComponent } from './componentes/editar-usuario/editar-usuario.component';
import { ListarUsuarioComponent } from './componentes/listar-usuario/listar-usuario.component';

const routes: Routes = [
  {path:'', pathMatch:'full', redirectTo:'agregar-usuario'},
  {path:'agregar-usuario', component:AgregarUsuarioComponent},
  {path:'listar-usuario', component:ListarUsuarioComponent},
  {path:'editar-usuario/:id', component:EditarUsuarioComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

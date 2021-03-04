@component('mail::message')
<h3> Ficha de Contato </h3>
@component('mail::table')
| Formulário | Resposta |
| ------------------ |:---------------------------------:|
| Nome | {{$contact->name}} |
| Email | {{$contact->email}} |
| Telefone | {{$contact->phone}} |
| Assunto | {{$contact->subject}} |
| Descrição | {{$contact->description}} |
| Data | {{$data}} |
@endcomponent

@component('mail::button', ['url' => 'https://www.algumlugar.com.br', 'color' => 'success'])
Gerenciar
@endcomponent
@endcomponent
describe('Frist Testing', function () {
    it('Navigate', () => {

        apresentation()

    });
});

const GLOBALOOP = 100;

export const apresentation = () => {
    let cont = 0;
    while (cont < GLOBALOOP)
    {
        test2E2();
        cont++;
    }
};

export const obterValueAleatorio = (tamanho, tipo) => {
    let value = 'ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz';
    let aleatorio = '';
    if(tipo){
        value = '0123456789'
    }
    for (let i = 0; i < tamanho; i++) {
        let rnum = Math.floor(Math.random() * value.length);
        aleatorio += value.substring(rnum, rnum + 1);
    }
    return aleatorio;
}

export var setSeleciona = (opcao) => {
    let altenativa = 'AB';
    let selecionado = ''
    for (let i = 1; i <= 12; i++) {
        let rnum = Math.floor(Math.random() * 2);
        selecionado = altenativa.substring(rnum, rnum + 1);
        cy.get(`#Gp${opcao}${selecionado}${i}`).click(); cy.wait(500);
    }
}

export const test2E2 = () => {
    cy.visit('http://127.0.0.1:8000/');
    cy.wait(1000);

    cy.contains('REALIZAR TESTE!').click();

    cy.get('input[name=nome]').type(obterValueAleatorio(3, false), {delay: 30});
    cy.get('input[name=telefone]').type(obterValueAleatorio(11, true), {delay: 30});
    cy.get('input[name=email]').type(`${obterValueAleatorio(15, false)}@gmail.com`, {delay: 30});
    cy.get('select[name=cidade]').select('Gama');
    cy.get('select[name=serie]').select('Concluido');

    cy.wait(1000);

    cy.contains('Enviar').click();

    cy.get('input[name=nome]').clear();
    cy.get('input[name=nome]').type(`${obterValueAleatorio(5, false)} ${obterValueAleatorio(8, false)}`, {delay: 70});
    cy.wait(1000);
    cy.contains('Enviar').click();

    cy.wait(1000);

    cy.contains('OK!').click();
    cy.wait(300)

    cy.window(setSeleciona('A'));

    // cy.wait(300);
    cy.contains('Proximo').click();

    cy.window(setSeleciona('B'));

    // cy.wait(300);
    cy.contains('Proximo').click();

    cy.window(setSeleciona('C'));

    // cy.wait(300);
    cy.contains('Proximo').click();

    cy.window(setSeleciona('D'));

    // cy.wait(300);
    cy.contains('Proximo').click();

    cy.window(setSeleciona('E'));

    // cy.wait(300);
    cy.contains('Enviar').click();
    cy.wait(1000);
    cy.contains('Sim').click();

    cy.wait(1000);

    cy.get(':nth-child(1) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(2) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(3) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(4) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get(':nth-child(5) > #dropdownMenuButton').click();
    cy.wait(900);

    cy.get('.btn > strong').click();
    cy.wait(900);

};


describe('Reset Schedule', () => {
    beforeEach(() => {
        // Sign in        
        cy.visit('/')
        cy.get('#btn-sign-in').click()
        cy.get('input[name=username]').type('nargyanti')
        cy.get('input[name=password]').type('12345678')
        cy.get('#sign-in-form').submit()
        cy.visit('settings/reset-data')
    })

    // afterEach(() => {
    //     // Sign out                
    //     cy.get('#dropdownMenuButton').click()
    //     cy.get('.dropdown-item').contains('Sign Out').click()            
    // })

    it('Reset schedule when schedule list is exist', function () {
        // Create data
        cy.get('#nav-schedule').click()
        cy.get('#btn-create-schedule').click()
        cy.get('input[name=course]').type('Software Testing')
        cy.get('input[name=teacher]').type('Pak Khairy')
        cy.get('input[name=location]').type('Lt7 B')
        cy.get('input[name=room]').type('RT01')        
        cy.get('input[name=contact]').type('08211111111')        
        cy.get('select[name=day]').select('Monday')
        cy.get('input[name=start]').type('11:00')
        cy.get('input[name=end]').type('12:00')
        cy.get('#create-schedule-form').submit()        

        cy.visit('settings/reset-data')
        cy.get('#btn-reset-schedule').click()
        cy.get('#btn-confirm-reset-schedule').click()        
        cy.get('p').should('contain', 'Schedule Successfully Reset')
    })

    it('Reset schedule when schedule list is empty', function () {
        cy.get('#btn-reset-schedule').click()
        cy.get('#btn-confirm-reset-schedule').click()        
        cy.get('p').should('contain', 'Schedule Successfully Reset')
    })    
})
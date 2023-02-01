// SPDX-License-Identifier: MIT 

pragma solidity >= 0.7.3;

contract Crud{
    struct Client{
        string name;
        string email;
        string date;
        uint8 visible;
        uint cel;
        uint256 cpf;
    }


    Client[] public clients;
    // mapping (uint => Client) deletedClient;
    uint [] public deletedClients;

    function create(string calldata name, string calldata email, string calldata date, uint256 cpf, uint cel) public {
        Client memory aux = Client(name, email, date, 1, cpf, cel);
        clients.push(aux);   
    }

    function read() external view returns(uint){
        return clients.length;
    }

    function alter(uint id) external{
        clients[id] = clients[clients.length - 1];
        clients.pop();
    }

    function remove(uint id) external {
        for(uint i = id; i < clients.length-1; i++){
            clients[i] = clients[i+1];      
        }
        clients.pop();
    }

}